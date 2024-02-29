<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cambio extends Model
{
    use HasFactory;

    public function partido(): BelongsTo
	{
    	return $this->belongsTo(Partido::class);
	}

    public function jugadorEntra(): BelongsTo
	{
    	return $this->belongsTo(Jugador::class, 'jugador_entra');

	}
    public function jugadorSale(): BelongsTo
	{
    	return $this->belongsTo(Jugador::class, 'jugador_sale');
	}
}
