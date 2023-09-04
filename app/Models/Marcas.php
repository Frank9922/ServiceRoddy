<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Vehicles;

class Marcas extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'pais', 'anio', 'path_logo'];

    public function vehicles() : HasMany
        {
            return $this->hasMany(Vehicles::class, 'marca_id');
        }
}
