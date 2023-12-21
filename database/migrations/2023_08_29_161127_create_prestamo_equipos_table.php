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
        Schema::create('prestamo_equipos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status')
                ->onDelete('no action')
                ->onUpdate('no action');

                $table->unsignedBigInteger('equipos_id');
                $table->foreign('equipos_id')->references('id')->on('equipos')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->unsignedBigInteger('alumnos_id');
                $table->foreign('alumnos_id')->references('id')->on('alumnos')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->unsignedBigInteger('carros_id');
                $table->foreign('carros_id')->references('id')->on('carros')
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
        Schema::dropIfExists('prestamo_equipos');
    }
};
