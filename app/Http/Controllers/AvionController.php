<?php

namespace App\Http\Controllers;

use App\Models\Avion;
use App\Http\Requests\StoreAvionRequest;
use App\Http\Requests\UpdateAvionRequest;

class AvionController extends Controller
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
     * @param  \App\Http\Requests\StoreAvionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function show(Avion $avion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function edit(Avion $avion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvionRequest  $request
     * @param  \App\Models\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvionRequest $request, Avion $avion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avion $avion)
    {
        //
    }
}
