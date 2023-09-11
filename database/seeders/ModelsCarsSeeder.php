<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ModelsCarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::get('car-list.json');
        $data = json_decode($json);

        foreach($data as $item)
        {
            $marcaId = DB::table('marcas')->where('name', $item->brand)->value('id');

            foreach($item->models as $item)
            {
                DB::table('models_cars')->insert([
                    'marca_id' => $marcaId,
                    'name' => $item,
                    'created_at' => now()
                ]);
            }
        }
    }
}
