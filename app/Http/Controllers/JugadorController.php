<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJugadorRequest;
use App\Http\Requests\UpdateJugadorRequest;
use App\Models\Jugador;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->authorizeResource(Jugador::class, 'jugador');
     }
    public function index()
    {
        return view('jugadores.index', [
            'jugadores' => Jugador::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jugadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* dd($request); */
        $jugador = new jugador();
        $imagen = $request->file('foto');
        Storage::makeDirectory('public/uploads');
        $nombre = Carbon::now() . '.jpeg';
        $manager = new ImageManager(new Driver());
        $jugador->guardar_imagen($imagen, $nombre, 320, $manager);
        $jugador->nombre = $request->input('nombre');
        $jugador->posicion = $request->input('posicion');
        $jugador->edad = $request->input('edad');
        $jugador->foto = $nombre;
        $jugador->save();
        return redirect()->route('jugadores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJugadorRequest $request, Jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        //
    }
}
