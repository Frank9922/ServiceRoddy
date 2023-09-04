<?php

namespace Database\Seeders;

use App\Models\Vehicles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            "Toyota",
            "Volkswagen",
            "Nissan",
            "Chevrolet",
            "Ford",
            "Hyundai",
            "Renault",
            "Fiat",
            "Kia",
            "Volvo",
            "Peugeot",
            "Mercedes-Benz",
            "Mitsubishi",
            "Honda",
            "Suzuki",
        ];
        for($i = 0; $i < count($marcas); $i++)
            {
                $vehiculo = new Vehicles();
                $vehiculo->nro_chasis = fake()->unique()->regexify('[A-Z0-9]{17}');
                $vehiculo->nro_motor = fake()->unique()->regexify('[A-Z0-9]{17}');
                $vehiculo->marca_id = fake()->numberBetween(1, 15);
                $vehiculo->color = fake()->colorName();
                $vehiculo->modelo = fake()->word();
                $vehiculo->nro_patente = fake()->regexify('[A-Z0-9]{7}');
                $vehiculo->propietario = fake()->name();
                $vehiculo->path_photos = 'Vehicles-photos/'. fake()->image(storage_path('app/public/Vehicles-photos'), 200, 200, null, false, false, (fake()->name()));
                $vehiculo->anio = fake()->year();
                $vehiculo->tip_combustible = fake()->randomElement(['Gasolina', 'Diésel', 'Eléctrico']);
                $vehiculo->f_registro = now();
                $vehiculo->motor = fake()->numberBetween(1000, 2000);
                $vehiculo->km_inicial = fake()->numberBetween(0, 100000);

                $vehiculo->save();
            }
    }
}
