<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ChatbotController extends Controller
{
    /**
     * Contexto maestro de EDS Manufacturing.
     */
    private function getEDSContext()
    {
        return "
        [CORE RULES]:
        - Be concise. Use maximum 2-3 short paragraphs per response.
        - Use bullet points for technical data.
        - Focus on moving the conversation towards getting the User's Email.

        [IDENTITY]:
        - Name: 'EDS-Bot'. Expert consultant for EDS Manufacturing.
        - Intro (only once): 'I am EDS-Bot, your expert consultant from EDS Manufacturing.'

        [EDS QUICK FACTS]:
        - Experience: World-class supplier since 1990. 9500% growth.
        - Clients: Ford, GM, Tesla, Honeywell, Lucid, Magna.
        - Infrastructure: HQ in Nogales, AZ; Production in Sonora & El Salvador.

        [TECHNICAL SPECS]:
        - Precision: 0.001mm using Komax/Artos automation.
        - Quality: IATF 16949 / ISO 9001. 99.8% quality rating.

        [LANGUAGE]:
        - Default: English. If user speaks Spanish, switch to Spanish immediately.

        [LEAD CAPTURE STRATEGY]:
        - 1. Provide value first.
        - 2. Ask for Name/Company if missing. Tags: [SET_NAME: value] [SET_COMPANY: value].
        - 3. Ask for Email for a 'Dedicated Account Manager'.
        ";
    }

    public function ask(Request $request)
    {
        $request->validate(['message' => 'required|string|max:500']);
        $rawMessage = trim($request->message);

        // 1. RECUPERAR MEMORIA
        $knownName = Session::get('chat_name');
        $knownCo = Session::get('chat_company');
        $knownEmail = Session::get('chat_email');

        // 2. CAPTURA DE EMAIL (Si el usuario escribe un correo directamente)
        if (filter_var($rawMessage, FILTER_VALIDATE_EMAIL)) {
            Session::put('chat_email', $rawMessage);
            $knownEmail = $rawMessage;

            try {
                Lead::updateOrCreate(
                    ['email' => $rawMessage],
                    [
                        'full_name' => $knownName, 
                        'company' => $knownCo, 
                        'last_message' => $rawMessage
                    ]
                );
            } catch (\Exception $e) { 
                Log::error("Error DB Lead: " . $e->getMessage()); 
            }
        }

        $memory = "\n\n[USER_CONTEXT: Name=" . ($knownName ?? 'Unknown') . ", Co=" . ($knownCo ?? 'Unknown') . ", Email=" . ($knownEmail ?? 'Not Provided') . "]";

        try {
            $apiKey = env('GEMINI_API_KEY');
            // Usamos Gemini 2.0 Flash (basado en tus capacidades actuales)
            $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=" . $apiKey;

            // CONFIGURACIÓN DE SSL DINÁMICA
            // En producción 'verify' debe ser true. En local (http) puede ser false si no tienes certificados.
            $verifySSL = config('app.env') === 'production';

            $responseIA = Http::withOptions(['verify' => $verifySSL])->post($url, [
                'system_instruction' => ['parts' => [['text' => $this->getEDSContext() . $memory]]],
                'contents' => [['role' => 'user', 'parts' => [['text' => $rawMessage]]]],
                'generationConfig' => [
                    'temperature' => 0.6,
                    'maxOutputTokens' => 400,
                ]
            ]);

            $data = $responseIA->json();

            if (isset($data['error'])) {
                Log::error("Gemini API Error: ", $data['error']);
                return response()->json(['reply' => "I'm experiencing technical difficulties. Please try again later."]);
            }

            $aiReply = $data['candidates'][0]['content']['parts'][0]['text'] ?? "I couldn't process that. How can I help you with EDS services?";

            // 4. EXTRAER NOMBRE/EMPRESA USANDO REGEX
            if (preg_match('/\[SET_NAME:\s*(.*?)\]/i', $aiReply, $matches)) {
                $knownName = trim($matches[1]);
                Session::put('chat_name', $knownName);
                $aiReply = preg_replace('/\[SET_NAME:.*?\]/i', '', $aiReply);
            }
            
            if (preg_match('/\[SET_COMPANY:\s*(.*?)\]/i', $aiReply, $matches)) {
                $knownCo = trim($matches[1]);
                Session::put('chat_company', $knownCo);
                $aiReply = preg_replace('/\[SET_COMPANY:.*?\]/i', '', $aiReply);
            }

            // Si ya tenemos email y detectamos nombre/empresa, actualizamos el Lead en DB
            if ($knownEmail) {
                Lead::where('email', $knownEmail)->update([
                    'full_name' => $knownName,
                    'company' => $knownCo
                ]);
            }

            return response()->json([
                'reply' => str_replace(['**', "\n"], ['<b>', '<br>'], trim($aiReply))
            ]);

        } catch (\Exception $e) {
            Log::error("Chatbot Exception: " . $e->getMessage());
            return response()->json(['reply' => "Service temporarily unavailable."]);
        }
    }
}