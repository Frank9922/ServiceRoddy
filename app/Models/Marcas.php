<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Vehicles;
use App\Models\ModelsCar;

class Marcas extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'path_logo'];
    protected $hidden = ['created_at', 'updated_at'];

    public function models() : HasMany
        {
            return $this->hasMany(ModelsCar::class, 'marca_id');
        }
}
