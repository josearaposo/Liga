<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
    private function imagen_url_relativa()
    {

        return '/uploads/' . $this->foto;
    }

    public function getImagenUrlAttribute()
    {
        return Storage::url(mb_substr($this->imagen_url_relativa(), 1));
    }

    public function existeImagen()
    {

        return Storage::disk('public')->exists($this->imagen_url_relativa());
    }

    public function guardar_imagen(UploadedFile $imagen, string $nombre, int $escala, ?ImageManager $manager = null)
    {
        if ($manager === null) {
            $manager = new ImageManager(new Driver());
        }

        $imagen = $manager->read($imagen);
        $imagen->scaleDown($escala);
        $ruta = Storage::path('public/uploads/' . $nombre);
        $imagen->save($ruta);
    }
}

