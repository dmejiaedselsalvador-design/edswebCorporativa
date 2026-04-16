<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    // 1. Declaramos la variable pública para los datos
    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        // 2. Asignamos los datos que vienen del controlador
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // 3. Aquí pones el Asunto del correo
            subject: 'New Contact Inquiry - EDS Web',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // 4. Aquí pones la ruta de tu vista blade
            view: 'emails.contact',
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
