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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('path_photo')->nullable();
            $table->unsignedBigInteger('role_id');
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('role_id')
                    ->references('id')
                    ->on('roles');
        });

        if(!File::exists(storage_path('app/public/Users-photos')))
        {
            File::makeDirectory(storage_path('app/public/Users-photos'));
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        File::deleteDirectory(storage_path('app/public/Users-photos'));
        Schema::dropIfExists('users');
    }
};
