<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marcas;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicles extends Model
{
    use HasFactory;

    protected $fillable = [
        'nro_chasis', 'nro_motor',
        'marca_id', 'color',
        'nro_patente', 'propietario',
        'anio', 'tip_combustible',
        'motor', 'path_photos',
        'f_registro', 'km_inicial'
    ];

    public function marca() :BelongsTo
        {
            return $this->belongsTo(Marcas::class);
        }

    public function vehicleReparations(): HasMany
        {
            return $this->hasMany(VehicleReparation::class);
        }

}
