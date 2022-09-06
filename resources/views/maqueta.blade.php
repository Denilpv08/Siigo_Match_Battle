@extends('layouts/app')

@section('title', 'Home')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card text-center" style="background-color: #FAFAFA">
            <div class="card-body">
                <img src="{{ asset('img/logo.png')}}" height="250px" width="300px" alt="img" style="opacity: value;">
                <div class="card-body">
                    <label for="" class="card-title">Ingrar numero de competidores</label>
                    <p class="card-text">Nota: Solo se admiten 2 a 7 jugadores</p>
                    <input type="text" name="user" id="user" class="form-sm">
                </div>
                <div>
                    <button class="btn btn-primary">Play</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
