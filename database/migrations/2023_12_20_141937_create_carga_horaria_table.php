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
        Schema::create('carga_horaria', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('asignaturas_id');
                $table->foreign('asignaturas_id')->references('id')->on('asignaturas')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->unsignedBigInteger('profesores_id');
                $table->foreign('profesores_id')->references('id')->on('profesores')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                    $table->unsignedBigInteger('cursos_id');
                $table->foreign('cursos_id')->references('id')->on('cursos')
                    ->onDelete('no action')
                    ->onUpdate('no action');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carga_horaria');
    }
};
