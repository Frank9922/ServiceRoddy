<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Admin',
            'description' => 'Administrador de la aplicacion web. '
        ]);
        Role::create([
            'name' => 'Jefe Mecanico',
            'description' => 'Encargado de mantener el sistema con datos correctos. '
        ]);
        Role::create([
            'name' => 'Mecanico/Ayudante',
            'description' => 'Encargado de ejecutar tareas de reparacion y/o mantenimiento. '
        ]);
    }
}
