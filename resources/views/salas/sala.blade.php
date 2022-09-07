@extends('layouts/app')

@section('content')

<style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
  }
  
  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  
  .container {
    padding: 2px 16px;
  }
  </style>
  </head>
  <body>

  <h2>Salas Disponibles</h2>
  @for ($i = 0; $i < 3; $i++)
      
  <div class="card">
    <img src="img_avatar.png" alt="Avatar" style="width:100%">
    <div class="container">
      <h4><b>Salas</b></h4> 
      <label for="">Numero Jugadores en Sala: {{ $hexa }}</label>
      <br>
      <a href="{{ url('/usuarios/'.$user->id) }}"><button type="submit">Generar Url</button></a>
      
      <button type="submit">Ingresar</button>
    </div>
  </div>
  @endfor
@endsection
