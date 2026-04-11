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
       Schema::create('leads', function (Blueprint $table) {
        $table->id();
        $table->string('full_name')->nullable(); // Nombre del contacto
        $table->string('email')->unique();       // Correo (obligatorio y único)
        $table->string('company')->nullable();   // Empresa que nos visita
        $table->string('country')->nullable();   // País de origen
        $table->string('interest')->nullable();  // ¿Qué producto le interesa?
        $table->text('last_message')->nullable(); // El último mensaje que envió
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
