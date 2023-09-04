<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => 'En curso',
            'description' => 'La reparación está en proceso y el vehículo está en el taller.'
        ]);
        Status::create([
            'name' => 'Pendiente',
            'description' => 'La reparación está pendiente de ser asignada a un técnico.'
        ]);
        Status::create([
            'name' => 'Reparada',
            'description' => 'La reparación está completa y el vehículo está listo para ser recogido.'
        ]);
        Status::create([
            'name' => 'Cancelada',
            'description' => 'La reparación se ha cancelado por cualquier motivo.'
        ]);
        Status::create([
            'name' => 'En espera de piezas',
            'description' => 'La reparación está pendiente de que lleguen las piezas necesarias.'
        ]);
        Status::create([
            'name' => 'Reprogramada',
            'description' => 'La reparación se ha reprogramado para una fecha posterior.'
        ]);
        Status::create([
            'name' => 'Retirada',
            'description' => 'El vehículo ha sido retirado del taller.'
        ]);
    }
}
