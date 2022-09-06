<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use App\Http\Requests\StoreMotoRequest;
use App\Http\Requests\UpdateMotoRequest;

class MotoController extends Controller
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
