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
        Schema::create('pids', function (Blueprint $table) {
            $table->id();
            $table->integer('pid')->comment('PID');
            $table->date('creacion')->comment('Creación');
            $table->string('tipo_transmision')->comment('Tipo de transmisión');
            $table->date('fecha_inicial')->comment('Fecha inicial');
            $table->date('fecha_final')->comment('Fecha final');
            $table->string('origen')->comment('Origen');
            $table->string('destino')->comment('Destino');
            $table->string('descripcion_evento')->comment('Descripción del evento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pids');
    }
};
