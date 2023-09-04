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
        Schema::create('historial_reparacions', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('reparation_id');
             $table->unsignedBigInteger('status_id');
             $table->unsignedBigInteger('user_id');
             $table->timestamp('fecha_cambio');
            // $table->dateTime('fecha_hora_cambio');
            // $table->unsignedBigInteger('estado_anterior_id');
            // $table->unsignedBigInteger('estado_posterior_id');
             $table->timestamps();

            $table->foreign('reparation_id')
                    ->references('id')
                    ->on('reparations');

            // $table->foreign('estado_anterior_id')
            //         ->references('id')
            //         ->on('statuses');

            // $table->foreign('estado_posterior_id')
            //         ->references('id')
            //         ->on('statuses');
            $table->foreign('status_id')
                    ->references('id')
                    ->on('statuses');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_reparacions');
    }
};
