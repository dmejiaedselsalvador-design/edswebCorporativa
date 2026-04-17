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
            // Destinatario principal
            $to = 'sales@edsmanufacturing.com';
        

            // Destinatarios en copia (CC)
            $cc = [
                'AEstrada@edsmanufacturing.com', // Armando
               //'d.mejia@edssv.com'             // Luis
            ];

            // Enviamos el correo con la estructura To y CC
            Mail::to($to)
                ->cc($cc)
                ->send(new ContactForm($data));

            return redirect()->route('contact.thanks');

        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
