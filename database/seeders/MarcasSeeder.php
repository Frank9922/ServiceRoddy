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
        $json = Storage::get('car-list.json');
        $data = json_decode($json);
        foreach($data as $item)
        {
            DB::table('marcas')->insert([
                'name' => $item->brand,
                'created_at' => now()
            ]);
        }
    }
}
