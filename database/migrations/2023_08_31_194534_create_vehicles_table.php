<?php

use Illuminate\Support\Facades\File;
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
            $table->string('modelo');
            $table->string('nro_chasis');
            $table->string('nro_motor');
            $table->unsignedBigInteger('marca_id');
            $table->string('color');
            $table->string('nro_patente');
            $table->string('propietario');
            $table->float('anio');
            $table->string('tip_combustible');
            $table->string('motor');
            $table->string('path_photos')->default('none');
            $table->string('f_registro');
            $table->decimal('km_inicial', 8, 0);
            $table->timestamps();


            $table->foreign('marca_id')
                    ->references('id')
                    ->on('marcas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        if(!File::exists(storage_path('app/public/Vehicles-photos')))
        {
            File::makeDirectory(storage_path('app/public/Vehicles-photos'));
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        File::deleteDirectory(storage_path('app/public/Vehicles-photos'));
        Schema::dropIfExists('vehicles');
    }
};
