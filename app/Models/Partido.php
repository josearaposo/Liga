<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Partido extends Model
{
    use HasFactory;

    public function jugadores(): HasMany
	{
    	return $this->hasMany(Jugador::class);
	}
    public function goles(): HasMany
	{
    	return $this->hasMany(Gol::class);
	}
    public function cambios(): HasMany
	{
    	return $this->hasMany(Cambio::class);
	}
    public function estadio(): BelongsTo
	{
    	return $this->belongsTo(Estadio::class, 'jugador_entra');

	}
}
