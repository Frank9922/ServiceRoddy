<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{

    public function run(): void
    {
        $json = Storage::get('db.json');
        $data = json_decode($json);
        foreach($data as $item)
        {
            DB::table('marcas')->insert([
                'name' => $item->brand,
                'created_at' => now(),
                'path_logo' => 'Marcas-photos/'.fake()->image(storage_path('app/public/Marcas-photos'), 400, 300, false, false, false,  $item->brand).''
            ]);
        }
    }
}
