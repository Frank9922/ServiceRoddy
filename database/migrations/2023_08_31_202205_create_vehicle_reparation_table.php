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
        Schema::create('vehicle_reparation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reparation_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();


            $table->foreign('reparation_id')
                    ->references('id')
                    ->on('reparations');

            $table->foreign('vehicle_id')
                    ->references('id')
                    ->on('vehicles');

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
        Schema::dropIfExists('vehicle_reparation');
    }
};
