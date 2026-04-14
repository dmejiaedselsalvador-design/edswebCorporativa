<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session; // Importante para manejar sesiones

class ChatbotController extends Controller
{
    /**
     * Contexto maestro de EDS Manufacturing para la instrucción de sistema.
     */
private function getEDSContext()
{
    return "
    [CORE RULES]:
    - Be concise. Use maximum 2-3 short paragraphs per response.
    - Use bullet points for technical data to keep it scannable.
    - Do not repeat your introduction if the user already knows you.
    - Focus on moving the conversation towards getting the User's Email.

    [IDENTITY]:
    - Name: 'EDS-Bot'. Expert consultant for EDS Manufacturing.
    - Intro (only once): 'I am EDS-Bot, your expert consultant from EDS Manufacturing.

    - IMPORTANT: Always finish your sentences. If you are close to the word limit, prioritize a short closing over a long explanation.

    [EDS QUICK FACTS]:
    - Experience: World-class supplier since 1990. No long-term debt. 9500% growth.
    - Clients: Ford, GM, Tesla, Honeywell, Lucid, Magna.
    - Infrastructure: 250,000 sq. ft. HQ in Nogales, AZ; Production in Sonora & El Salvador ($20M investment).
    - Capacity: 50M+ units annually / 2,000+ employees.

    [TECHNICAL SPECS]:
    - Precision: 0.001mm using Komax/Artos automation (95% automated).
    - Design: CAD/3D (CATIA, NX, AutoCAD), BOM generation.
    - Quality: IATF 16949 / ISO 9001. 99.8% quality rating.
    - Testing: Continuity, Resistance, Hipot, and Pull-force.

    [LANGUAGE]:
    - Default: English. If user speaks Spanish, switch to Spanish immediately.

    [LEAD CAPTURE STRATEGY]:
    - Check [USER_CONTEXT] before asking for data.
    - 1. Provide value first (answer the question).
    - 2. Ask for Name/Company if missing. Use tags: [SET_NAME: value] [SET_COMPANY: value].
    - 3. Ask for Email to assign a 'Dedicated Account Manager'.

    [CLOSING]:
    For pricing or project specifics: 'I would like to assign a Dedicated Account Manager to your project. Please provide your email to get started.'
    ";
}

public function ask(Request $request)
    {
        $request->validate(['message' => 'required|string|max:500']);
        $rawMessage = trim($request->message);

        // 1. RECUPERAR MEMORIA (De la sesión del navegador)
        $knownName = Session::get('chat_name');
        $knownCo = Session::get('chat_company');
        $knownEmail = Session::get('chat_email');

        // 2. CAPTURA DE EMAIL
        if (filter_var($rawMessage, FILTER_VALIDATE_EMAIL)) {
            Session::put('chat_email', $rawMessage);
            $knownEmail = $rawMessage;

            try {
                Lead::updateOrCreate(
                    ['email' => $rawMessage],
                    ['full_name' => $knownName, 'company' => $knownCo, 'last_message' => $rawMessage]
                );
            } catch (\Exception $e) { Log::error("Error DB: " . $e->getMessage()); }
        }

        // 3. CONSTRUIR EL MENSAJE CON MEMORIA PARA GEMINI
        // Esto hace que la IA "sepa" lo que ya le dijiste
        $memory = "\n\n[CONTEXTO ACTUAL: User: ".($knownName ?? 'N/A').", Co: ".($knownCo ?? 'N/A').", Email: ".($knownEmail ?? 'N/A')."]";

        try {
            $apiKey = env('GEMINI_API_KEY');
            $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=" . $apiKey;

            $responseIA = Http::withOptions(['verify' => false])->post($url, [
                'system_instruction' => ['parts' => [['text' => $this->getEDSContext() . $memory]]],
                'contents' => [['role' => 'user', 'parts' => [['text' => $rawMessage]]]],
                'generationConfig' => [
    'temperature' => 0.6, // Un poco más bajo para que sea menos 'creativo' y más directo
    'maxOutputTokens' => 300, // Límite físico de palabras
]
            ]);

            $data = $responseIA->json();
            $aiReply = $data['candidates'][0]['content']['parts'][0]['text'] ?? "I am having trouble connecting.";

            // 4. EXTRAER NOMBRE/EMPRESA SI LA IA LOS DETECTÓ
            if (preg_match('/\[SET_NAME:\s*(.*?)\]/i', $aiReply, $matches)) {
                Session::put('chat_name', trim($matches[1]));
                $aiReply = preg_replace('/\[SET_NAME:.*?\]/i', '', $aiReply);
            }
            if (preg_match('/\[SET_COMPANY:\s*(.*?)\]/i', $aiReply, $matches)) {
                Session::put('chat_company', trim($matches[1]));
                $aiReply = preg_replace('/\[SET_COMPANY:.*?\]/i', '', $aiReply);
            }

            return response()->json([
                'reply' => str_replace(['**', "\n"], ['<b>', '<br>'], trim($aiReply))
            ]);

        } catch (\Exception $e) {
            return response()->json(['reply' => "🚨 Error: " . $e->getMessage()]);
        }
    }
}
