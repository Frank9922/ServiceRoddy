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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('nro_chasis');
            $table->string('nro_motor');
            $table->unsignedBigInteger('marca_id');
            $table->string('color');
            $table->string('nro_patente');
            $table->string('propietario');
            $table->float('anio');
            $table->string('tip_combustible');
            $table->string('motor');
            $table->string('path_photos');
            $table->string('f_registro');
            $table->decimal('km_inicial', 8, 0);
            $table->timestamps();


            $table->foreign('marca_id')
                    ->references('id')
                    ->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
