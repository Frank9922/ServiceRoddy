<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\Vehicles;
use App\Models\Typeofrepair;
use App\Models\HistorialReparacion;
use App\Models\VehicleReparation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reparation extends Model
{
    use HasFactory;


    public function status() :BelongsTo
        {
            return $this->belongsTo(Status::class);
        }

    public function typeOfRepair() : BelongsTo
        {
            return $this->belongsTo(Typeofrepair::class, 'typeofrepari_id');
        }

    public function vehicle() : BelongsTo
        {
            return $this->belongsTo(Vehicles::class, 'vehicle_id');
        }

    public function vehicleReparations() : HasMany
        {
            return $this->hasMany(VehicleReparation::class);
        }

    public function statuses() : BelongsToMany
        {
            return $this->belongsToMany(Status::class, 'historial_reparacions')
            ->withPivot(['fecha_cambio', 'user_id'])
            ->orderBy('historial_reparacions.fecha_cambio', 'desc');
        }
}
