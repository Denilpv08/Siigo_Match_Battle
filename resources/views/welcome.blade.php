<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Maqueta</title>
  </head>
  <body>

  @for ($index = 1; $index < 7; $index++)
  <div class="row" style="margin: auto;">
    <div class="col-sm-12">
     <div class="card border-dark mb-3" style="max-width: 20rem; background-color: #333333; color: rgb(248 248 255);">
          <div class="card-header bg-transparent border-dark">1 A</div>
              <!--<div class="card-body">-->
            @foreach ($motos as $moto)
            <img src="{{ $moto->nombre}} }}"  height="310px" width="318px" alt="img">
                    <!--</div>-->
              <div class="card-footer bg-transparent border-dark">
                  <label for="">CILINDRAJE:</label> 
                      <label for="" style="float: right;">171,7 cc</label>
                      <br>
                      <label for="">POTENCIA:</label> 
                      <label for="" style="float: right;">11.3 HP @ 7500 rpm</label>
                      <br>
                      <label for="">TORQUE:</label> 
                      <label for="" style="float: right;">11.7 Nm @ 6000 rpm</label>
                      <br>
                      <label for="">ALINEACION:</label> 
                      <label for="" style="float: right;">Inyección electrónica</label>
                      <br>
                      <label for="">REFRIGERACIÓN:</label> 
                      <label for="" style="float: right;">Aire forzado</label>
                  </div>
            @endforeach;
            
      </div>
    </div>
  </div>
  @endfor;

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
