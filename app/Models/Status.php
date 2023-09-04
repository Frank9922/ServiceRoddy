<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reparation;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;

    public function reparations() : HasMany
        {
            return $this->hasMany(Reparation::class);
        }

    public function reparaciones(): BelongsToMany
        {
            return $this->belongsToMany(Reparation::class, 'historial_reparacions')
            ->withPivot(['fecha_cambio', 'user_id'])
            ->orderBy('historial_reparacions.fecha_cambio', 'desc');
        }
}
