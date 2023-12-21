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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('anio_academico');
            $table->unsignedBigInteger('asignaturas_id');
            $table->foreign('asignaturas_id')->references('id')->on('asignaturas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->unsignedBigInteger('profesores_id');
            $table->foreign('profesores_id')->references('id')->on('profesores')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->unsignedBigInteger('alumnos_id');
            $table->foreign('alumnos_id')->references('id')->on('alumnos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->unsignedBigInteger('cursos_id');
            $table->foreign('cursos_id')->references('id')->on('cursos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->unsignedBigInteger('semestres_id');
            $table->foreign('semestres_id')->references('id')->on('semestres')
                ->onDelete('no action')
                ->onUpdate('no action');
                $table->decimal('n1',3,2)->nullable();
                $table->decimal('n2',3,2)->nullable();
                $table->decimal('n3',3,2)->nullable();
                $table->decimal('n4',3,2)->nullable();
                $table->decimal('n5',3,2)->nullable();
                $table->decimal('n6',3,2)->nullable();
                $table->decimal('n7',3,2)->nullable();
                $table->decimal('n8',3,2)->nullable();
                $table->decimal('n9',3,2)->nullable();
                $table->decimal('n10',3,2)->nullable();
                $table->decimal('prom',3,2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones');
    }
};
