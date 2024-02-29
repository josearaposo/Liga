<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estadio extends Model
{
    use HasFactory;

    public function partidos(): HasMany
	{
    	return $this->hasMany(Jugador::class);
	}
}
