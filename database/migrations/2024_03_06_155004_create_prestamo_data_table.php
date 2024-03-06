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
        Schema::create('prestamo_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_id');
            $table->foreign('data_id')->references('id')->on('data')
                ->onDelete('no action')
                ->onUpdate('no action');
                $table->unsignedBigInteger('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('profesores')
                ->onDelete('no action')
                ->onUpdate('no action');

                $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->string('cable_hdmi');
            $table->string('cable_poder');
            $table->string('alargador');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamo_data');
    }
};
