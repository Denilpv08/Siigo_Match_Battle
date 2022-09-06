<?php

namespace App\Http\Controllers;

use App\Models\FichaTecnica;
use App\Http\Requests\StoreFichaTecnicaRequest;
use App\Http\Requests\UpdateFichaTecnicaRequest;

class FichaTecnicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreFichaTecnicaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFichaTecnicaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FichaTecnica  $fichaTecnica
     * @return \Illuminate\Http\Response
     */
    public function show(FichaTecnica $fichaTecnica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FichaTecnica  $fichaTecnica
     * @return \Illuminate\Http\Response
     */
    public function edit(FichaTecnica $fichaTecnica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFichaTecnicaRequest  $request
     * @param  \App\Models\FichaTecnica  $fichaTecnica
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFichaTecnicaRequest $request, FichaTecnica $fichaTecnica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FichaTecnica  $fichaTecnica
     * @return \Illuminate\Http\Response
     */
    public function destroy(FichaTecnica $fichaTecnica)
    {
        //
    }
}
