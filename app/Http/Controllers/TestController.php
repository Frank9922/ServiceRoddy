<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicles;
use App\Models\User;
use App\Models\Marcas;
use App\Models\Reparation;
use Illuminate\Support\Benchmark;

class TestController extends Controller
{
    public function index()
    {
        $vehicles = Vehicles::all();
        $users = User::all();
        $marcas = Marcas::with('vehicles')->get();
        $reparations = Reparation::with('status', 'typeOfRepair', 'vehicle', 'statuses')->get();

        return response()->json([
        //     'vehicles' => $vehicles,
        //     'users' => $users,
        'marcas' => $marcas,
        'reparations' => $reparations
        ], 201);
    }
}
