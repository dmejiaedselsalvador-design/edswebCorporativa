<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatbotResponse extends Model
{

    protected $table = 'chatbot_responses';
    protected $fillable = ['keyword', 'response'];
    public $timestamps = false;

    /**
     * Verifica si el mensaje coincide con alguno de los keywords
     */
public function matches(string $message, float $similarityThreshold = 85): bool
{
    $message = strtolower(trim($message));
    $message = preg_replace('/[^a-z0-9\s]/', '', $message);
    $messageWords = explode(' ', $message);

    // Separamos las keywords (ej: "quality control, iso certification")
    $keywordsList = array_map('trim', explode(',', strtolower($this->keyword)));

    foreach ($keywordsList as $fullKeyword) {
        if (!$fullKeyword) continue;

        // Si el usuario escribió la frase exacta que tienes en la keyword
        if (str_contains($message, $fullKeyword)) return true;

        $keyWords = explode(' ', $fullKeyword);
        $matchedWordsCount = 0;

        foreach ($keyWords as $kWord) {
            foreach ($messageWords as $mWord) {
                // 1. Coincidencia exacta o muy cercana
                similar_text($mWord, $kWord, $percent);

                if ($mWord === $kWord || $percent >= $similarityThreshold) {
                    $matchedWordsCount++;
                    break; // Palabra encontrada, pasamos a la siguiente kWord
                }
            }
        }

        // --- LA REGLA DE ORO ---
        // Solo respondemos si coinciden la mayoría de las palabras de la keyword
        // Si mi keyword es "quality control" (2 palabras), necesito que el usuario
        // haya escrito ambas para que el bot responda.
        if ($matchedWordsCount >= count($keyWords)) {
            return true;
        }
    }

    return false;
}
}
