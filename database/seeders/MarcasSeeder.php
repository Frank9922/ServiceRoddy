<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marcas;
use Illuminate\Support\Facades\Storage;

class MarcasSeeder extends Seeder
{

    public function run(): void
    {
        $json = Storage::get('car_brands.json');
        $data = json_decode($json);
        foreach($data as $item)
        {
            Marcas::create([
                'name' => $item->nombre,
                'pais' => $item->pais,
                'anio' => $item->año,
                'path_logo' =>'profile-photos/'.fake()->image(storage_path('app/public/Marcas-photos'), 200, 200, null, false, false, (fake()->name()))
            ]);
        }
    }
}
