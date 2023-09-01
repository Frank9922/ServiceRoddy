<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reparation;
use App\Models\Vehicles;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleReparation extends Model
{
    use HasFactory;

    public function reparation() : BelongsTo
        {
            return $this->belongsTo(Reparation::class);
        }

    public function vehicle() : BelongsTo
        {
            return $this->belongsTo(Vehicles::class);
        }

    public function user() : BelongsTo
        {
            return $this->belongsTo(User::class);
        }
}
