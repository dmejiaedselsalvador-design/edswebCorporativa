<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatbotResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChatbotController extends Controller
{
    public function ask(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
            'first' => 'nullable|boolean'
        ]);

        $message = strtolower(trim($request->message));
        $isFirst = $request->first ?? false;

        // limpiar mensaje igual que en modelo
        $message = preg_replace('/[^a-z0-9\s]/', '', $message);

        $reply = "";

        // MENSAJE INICIAL
        if ($isFirst) {
            $reply .= "
            👋 Welcome to EDS Manufacturing.<br><br>
            I can help you with:<br>
            • Pricing<br>
            • Engineering<br>
            • Manufacturing<br>
            • Quality<br><br>
            ";
        }

        // EMAIL
        if (filter_var($message, FILTER_VALIDATE_EMAIL)) {
            $exists = DB::table('leads')->where('email', $message)->exists();
            if (!$exists) {
                DB::table('leads')->insert([
                    'email' => $message,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
            return response()->json([
                'reply' => $reply . "✅ Thank you! Our team will contact you soon."
            ]);
        }

        // SALUDOS (prioridad)
        if (Str::contains($message, ['hi', 'hello', 'hey'])) {
            return response()->json([
                'reply' => $reply . "👋 Hello! How can I help you today?"
            ]);
        }

        // PRICING
        if (Str::contains($message, ['price', 'pricing', 'quote', 'cost'])) {
            return response()->json([
                'reply' => $reply . "💰 Our pricing depends on your project.<br><br>👉 Can I get your email to send you a quote?"
            ]);
        }

        // BUSCAR RESPUESTA EN DB usando matches()
        foreach (ChatbotResponse::all() as $response) {
            if ($response->matches($message)) {
                return response()->json([
                    'reply' => $reply . $response->response
                ]);
            }
        }

        // FALLBACK
        return response()->json([
            'reply' => $reply . "
            🤖 I couldn't find an exact answer.<br><br>
            You can ask about:<br>
            • Why choose EDS<br>
            • Engineering<br>
            • Manufacturing<br>
            • Quality<br>
            • Pricing<br><br>
            👉 Or leave your email and we will contact you 📩
            "
        ]);
    }
}