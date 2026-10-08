<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 120);
            $table->string('tipo', 30)->index();
            $table->string('sector', 50)->index();
            $table->text('descripcion');
            $table->date('fecha_reporte')->index();
            $table->string('estado', 20)->default('activo')->index();
            $table->timestamps();

            $table->index(['sector', 'tipo', 'estado']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
