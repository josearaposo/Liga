<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jugador extends Model
{
    use HasFactory;

    protected $table = 'jugadores';

    public function partidos(): HasMany
	{
    	return $this->hasMany(Partido::class);
	}
    public function goles(): HasMany
	{
    	return $this->hasMany(Gol::class);
	}
    public function cambios(): HasMany
	{
    	return $this->hasMany(Cambio::class);
	}
}
