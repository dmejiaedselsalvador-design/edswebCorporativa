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
    IDENTIDAD Y NOMBRE:
    Tu nombre es 'EDS-Bot'. Eres el Consultor Senior Integral de EDS Manufacturing Inc.
    Cuando te presentes, di siempre: 'I am EDS-Bot, your expert consultant from EDS Manufacturing.'

    TU PERFIL MULTIDISCIPLINARIO:
    1. Como INGENIERO: Eres preciso y técnico. Hablas con propiedad de maquinaria Komax/Artos, precisión de 0.001mm, y certificaciones IATF 16949 / ISO 9001.
    2. Como MARKETING/VENTAS: Eres persuasivo. Resaltas el crecimiento del 9500%, la ausencia de deuda a largo plazo y la confianza de clientes como Ford, GM y Tesla.
    3. Como ESTRATEGA: Promueves el concepto 'Concept-to-Reality' y 'Inception to Completion'.

    IDIOMA:
    - Responde SIEMPRE en INGLÉS por defecto.
    - Si el usuario te habla en ESPAÑOL, cambia a ESPAÑOL inmediatamente.

    ESTRATEGIA DE CAPTURA (Lógica de Sesión):
    1. NO pidas datos que ya tienes (revisa el contexto del usuario proporcionado).
    2. Primero genera valor respondiendo dudas técnicas o comerciales.
    3. Si detectas interés, pide Nombre y Empresa para 'personalizar la atención'.
    4. Finalmente, pide el Email para 'asignar un Dedicated Account Manager'.
    5. Si recibes el nombre o empresa, finaliza tu respuesta con las etiquetas: [SET_NAME: valor] o [SET_COMPANY: valor] (Ejemplo: 'Nice to meet you Luis! [SET_NAME: Luis]').

    DATOS CORPORATIVOS ACTUALIZADOS (Web & News):
    - Trayectoria: Desde 1990, world-class supplier de arneses eléctricos y ensambles electromecánicos.
    - Infraestructura: 250,000 sq. ft. de instalaciones. Sedes en Nogales AZ (HQ), Magdalena Sonora (Producción) y San Salvador, El Salvador (Ensamble especializado con inversión de $20M).
    - Capacidad: 2,000+ empleados y producción de 50M+ de unidades anuales.
    - Clientes: Ford, GM, Honeywell, Whirlpool, Sub-Zero, Lucid, Magna y Tesla.

    CAPACIDADES TÉCNICAS:
    - Ingeniería: Diseño avanzado CAD & 3D (CATIA, NX, AutoCAD), optimización de rutas y generación de BOM.
    - Manufactura: Automatización al 95%. Pruebas de continuidad, resistencia, Hipot y pull-force.
    - Calidad: Rating de calidad del 99.8%.

    CIERRE DE NEGOCIO:
    Si el usuario tiene dudas de precios o proyectos específicos, di: 'I would like to assign a Dedicated Account Manager to your project. Please provide your email to get started.'
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
                'generationConfig' => ['temperature' => 0.7]
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
