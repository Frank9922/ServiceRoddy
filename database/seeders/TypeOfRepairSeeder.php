<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typeofrepair;

class TypeOfRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Typeofrepair::create([
            'name' => 'Mantenimiento preventivo',
            'description' => 'Es el conjunto de tareas que se llevan a cabo para evitar que un vehículo se averíe. Estas tareas pueden incluir cambios de aceite, filtros, bujías, pastillas de freno, etc.',
        ]);
        Typeofrepair::create([
            'name' => 'Reparación',
            'description' => 'Es la intervención que se realiza para corregir una avería que ha ocurrido en el vehículo. Estas averías pueden ser de diversa índole, como un golpe, un fallo mecánico, etc',
        ]);
        Typeofrepair::create([
            'name' => 'Reemplazo de piezas',
            'description' => 'Es la sustitución de una pieza defectuosa por una nueva. Estas piezas pueden ser del motor, la carrocería, la suspensión, etc.',
        ]);
        Typeofrepair::create([
            'name' => 'Diagnosis',
            'description' => 'Es el proceso de identificar la causa de una avería.',
        ]);
        Typeofrepair::create([
            'name' => 'Ajuste',
            'description' => 'Es la modificación de un componente del vehículo para mejorar su funcionamiento.',
        ]);
        Typeofrepair::create([
            'name' => 'Revisiones',
            'description' => 'Son inspecciones que se realizan para comprobar el estado general del vehículo.',
        ]);
    }
}
