<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validar datos
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // 2. Preparar datos para el Mailable
        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
        ];

        try {
         // Definimos los destinatarios en un arreglo
    $recipients = [
      //  'Trackersys@edsmanufacturing.com',
     'AEstrada@edsmanufacturing.com', // correo de gerente de it
     'sales@edsmanufacturing.com', // Correo principal de ventas
      //  'd.mejia@edssv.com' // Tu correo para monitorear la prueba
    ];

    // Enviamos el correo a todos los de la lista
    Mail::to($recipients)->send(new ContactForm($data));

   // return back()->with('success', 'Thank you! Your message has been sent.');
   return redirect()->route('contact.thanks');
        } catch (\Exception $e) {
            // En caso de error de conexión con el servidor de correo
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
