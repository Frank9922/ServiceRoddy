<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use App\Models\User;
use App\Models\Marcas;
use App\Models\Reparation;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $marcas = Marcas::with('models')->get();

        // return response()->json([
        // //     'vehicles' => $vehicles,
        // //     'users' => $users,
        // 'marcas' => $marcas,
        // 'Query' => $fiat,
        // 'reparations' => $reparations
        // ], 201);
        return view('test', compact('marcas'));
    }
}
