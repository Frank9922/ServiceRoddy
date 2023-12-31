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
        Schema::create('reparations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamp('duration');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('typeofrepari_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->string('materials');
            $table->string('path_Bphotos')->nullable();
            $table->string('path_Aphotos')->nullable();
            $table->string('observations');
            $table->timestamps();

            $table->foreign('vehicle_id')
                    ->references('id')
                    ->on('vehicles');

            $table->foreign('status_id')
                    ->references('id')
                    ->on('statuses');

            $table->foreign('typeofrepari_id')
                    ->references('id')
                    ->on('typeofrepairs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparations');
    }
};
