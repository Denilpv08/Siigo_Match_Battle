<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <h1>algoritmo</h1>
  
  <form action="{{ route('moto.index') }}" method="post">
  @csrf

    <h1>{{ $clave }}</h1>
    <h1>{{ $cartas_jugador }}</h1>

    <button type="submit" name="enviar">enviar</button>
  </form>
</body>
</html>