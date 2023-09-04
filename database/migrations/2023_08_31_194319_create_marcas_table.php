<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pais');
            $table->string('anio');
            $table->string('path_logo')->default('none');
            $table->timestamps();
        });

        if(!File::exists(storage_path('app/public/Marcas-photos'))){
            File::makeDirectory(storage_path('app/public/Marcas-photos'));
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        File::deleteDirectory(storage_path('app/public/Marcas-photos'));
        Schema::dropIfExists('marcas');
    }
};
