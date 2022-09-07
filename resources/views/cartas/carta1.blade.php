<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Maqueta</title>
  </head>
  <body>

  @for ($index = 1; $index <= 7; $index++)
    <div class="row" style="margin: auto;">
      <div class="col-sm-12">
        <div class="card border-dark mb-3" style="max-width: 20rem; background-color: #333333; color: rgb(248 248 255);">
            <div class="card-header bg-transparent border-dark">1 A</div>
                <!--<div class="card-body">-->
                    <!--</div>-->
              <div class="row">
                @foreach ($motos as $moto)
                  <img src="{{ $moto->nombre}}"  height="310px" width="318px" alt="img">
                  <div class="container-fluid col-3">
                    <label for="">CILINDRAJE:</label> 
                    <label for="" style="float: right;">{{ $moto->cilindraje }}</label>
                    <br>
                    <label for="">POTENCIA:</label> 
                    <label for="" style="float: right;">{{ $moto->refrigeracion }}</label>
                    <br>
                    <label for="">TORQUE:</label> 
                    <label for="" style="float: right;">{{ $moto->potencia }}</label>
                    <br>
                    <label for="">ALINEACION:</label> 
                    <label for="" style="float: right;">{{ $moto->sistema_alimentacion }}</label>
                    <br>
                    <label for="">REFRIGERACIÓN:</label> 
                    <label for="" style="float: right;">{{ $moto->torque }}</label>
                    <br>
                    <label for="">VELOCIDAD:</label> 
                    <label for="" style="float: right;">{{ $moto->velocidad }}</label>
                  </div>
                </div>
              @endforeach
        </div>
      </div>
    </div>
  @endfor

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>