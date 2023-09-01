<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reparation;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Typeofrepair extends Model
{
    use HasFactory;

    public function reparations() : HasMany
        {
            return $this->hasMany(Reparation::class);
        }
}
