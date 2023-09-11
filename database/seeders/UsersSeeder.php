<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'adminrole@example.com',
            'password'=> Hash::make('123456789'),
            'profile_photo_path' => 'profile-photos/'.fake()->image(storage_path('app/public/profile-photos'), 400, 300, false, false, false, "Admin")."",
            'role_id' => 1
        ]);

        User::factory(10)->create();
    }
}
