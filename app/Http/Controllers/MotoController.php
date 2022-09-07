<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use App\Http\Requests\StoreMotoRequest;
use App\Http\Requests\UpdateMotoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //  $motos = DB::table('motos as m')
            // ->join('fichas_tecnicas as f', 'm.moto_id', '=', 'f.ficha_tecnica_id')
            // ->join('vehiculos_datos as v', 'm.moto_id', '=', 'v.vehiculo_dato_id')
            // ->select('v.nombre', 'v.foto', 'f.cilindraje', 'f.refrigeracion', 'f.potencia', 
            //         'f.sistema_alimentacion', 'f.torque', 'f.velocidad')
            // ->get();
            // return view('cartas.carta3', compact('motos'));

        
        // $cartas = 32;
        // $descontar_cartas = 0;
        // $jugadores = 7;
        // $cilindraje = array (1=>132, 2=>354, 3=>314, 4=>68, 5=>46, 6=>476, 7=>876);
        // $cartas_jugador = $cartas / $jugadores;
        // $ganador = $cartas_jugador + $descontar_cartas;
        // $clave = array_search('5', $cilindraje);

        // if (isset($_POST['enviar'])) {
        //     $cartas_jugador -= 1;
        //     foreach ($cilindraje as $key => $value) {
        //         echo $key;
        //     }
        // }
        // echo $clave;
        // echo $maximo;
        // echo $cartas_jugador;

        return view('cartas.carta3', compact('clave', 'cartas_jugador'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMotoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function show(Moto $moto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function edit(Moto $moto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMotoRequest  $request
     * @param  \App\Models\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMotoRequest $request, Moto $moto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moto $moto)
    {
        //
    }
}
