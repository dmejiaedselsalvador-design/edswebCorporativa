<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatbotResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    private function getEDSContext()
    {
        return "
        Eres 'EDS-Bot', experto de EDS Manufacturing Inc. 
        Keywords: AI-Driven Solutions, Automation, Cost Reduction, Zero Defects.
        Regla: Responde en inglés, a menos que te hablen en español. 
        Si detectas interés comercial, pide el email.
        ";
    }

    public function ask(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
            'first' => 'nullable|boolean'
        ]);

        $rawMessage = trim($request->message);
        $message = strtolower($rawMessage);
        $isFirst = $request->first ?? false;

        // Limpiar mensaje para búsquedas locales
        $cleanMessage = preg_replace('/[^a-z0-9\s]/', '', $message);
        $reply = "";

        if ($isFirst) {
            $reply .= "👋 Welcome to EDS Manufacturing. How can I help you?<br><br>";
        }

        // 1. PRIORIDAD: CAPTURA DE LEADS (EMAIL)
        if (filter_var($rawMessage, FILTER_VALIDATE_EMAIL)) {
            DB::table('leads')->updateOrInsert(['email' => $rawMessage], ['updated_at' => now()]);
            return response()->json(['reply' => "✅ Thank you! Our team will contact you soon."]);
        }

        // 2. BUSCAR EN BASE DE DATOS LOCAL (Tu lógica original de ChatbotResponse)
        // Esto ahorra dinero y tiempo
        foreach (ChatbotResponse::all() as $localResponse) {
            if ($localResponse->matches($cleanMessage)) {
                return response()->json([
                    'reply' => $reply . $localResponse->response . " <br><small><i>(Local Response)</i></small>"
                ]);
            }
        }

        // 3. SI NO ESTÁ EN DB LOCAL, USAR GEMINI
        $apiKey = env('GEMINI_API_KEY');
        $history = session()->get('chat_history', []);

        try {
            $responseIA = Http::withOptions(['verify' => false])
                ->timeout(20)
                ->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=" . $apiKey, [
                    'contents' => array_merge($history, [['role' => 'user', 'parts' => [['text' => $rawMessage]]]]),
                    'system_instruction' => ['parts' => [['text' => $this->getEDSContext()]]],
                    'generationConfig' => ['temperature' => 0.2, 'maxOutputTokens' => 600]
                ]);

            $data = $responseIA->json();

            if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                $aiReply = $data['candidates'][0]['content']['parts'][0]['text'];

                // --- MOTOR DE APRENDIZAJE ---
                // Guardamos la respuesta de Gemini en tu tabla local para que la próxima vez 
                // se responda desde el PASO 2 sin gastar API.
                ChatbotResponse::create([
                    'keyword' => $cleanMessage, // Se guarda la pregunta como keyword
                    'response' => $aiReply,
                    'is_automated' => true // Podrías añadir esta columna para saber qué aprendió solo
                ]);

                // Actualizar historial de sesión
                $history[] = ['role' => 'user', 'parts' => [['text' => $rawMessage]]];
                $history[] = ['role' => 'model', 'parts' => [['text' => $aiReply]]];
                session()->put('chat_history', array_slice($history, -10));

                $formattedReply = str_replace(['**', "\n"], ['<b>', '<br>'], $aiReply);
                return response()->json(['reply' => $reply . $formattedReply]);
            }

        } catch (\Exception $e) {
            // FALLBACK FINAL: Si falla internet o la API
            return response()->json([
                'reply' => "I'm having a brief connection issue. Please contact us at info@edsmanufacturing.com for immediate help."
            ]);
        }
    }
}