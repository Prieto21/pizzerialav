<!doctype html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sapori D’italia</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
    </head>

    <body div class="fondo" background="{{asset('/imagenes/fondo.jpg')}}">
        <nav class="navbar navbar-dark bg-warning">
            <span class="navbar-brand mb-0 h1">
                <!-- Example single danger button -->
                
    <div class="btn-group">
      <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Perfil
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="http://localhost/pizzerialav/public/sapori/cuenta">Inicio</a>
        <a class="dropdown-item" href="http://localhost/pizzerialav/public/cuenta/informacion">Información</a>
        <a class="dropdown-item" href="http://localhost/pizzerialav/public/cuenta/historial">Historial de pedidos</a>
        
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="http://localhost/pizzerialav/public/registro">Cerrar sesión</a>
      </div>
    </div>
                
            </span>
            <div class="form-inline my-2 my-lg-0">
            <h4><em>Sapori D’italia</em></h4>
               
                
    
            </div>
            
        </nav>
    

    @yield('contenido')



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>