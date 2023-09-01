<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\Typeofrepair;
use App\Models\VehicleReparation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
            return $this->belongsTo(Typeofrepair::class);
        }

    public function vehicleReparations() : HasMany
        {
            return $this->hasMany(VehicleReparation::class);
        }
}
