<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
           // Cambiamos el tipo de dato a 'text' para que soporte miles de caracteres
        $table->text('ebay_url')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {

       // Por si necesitas volver atrás, aunque 'text' es lo mejor aquí
        $table->string('ebay_url', 255)->change();
        });
    }
};
