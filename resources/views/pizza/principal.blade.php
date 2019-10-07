@extends('pizza.layout')


@section('contenido')
<nav class="navbar navbar-dark bg-warning">
    <span class="navbar-brand mb-0 h1">
        <h4><em>Sapori D’italia</em></h4>
    </span>
    <div class="form-inline my-2 my-lg-0">
        <a href="https://www.facebook.com/"><img src="{{asset('/imagenes/facebook.jpg')}}" eight="50" width="50" class="rounded-circle"></a>
        &nbsp
        <a href="https://www.instagram.com/"><img src="{{asset('/imagenes/instagram.jpg')}}" eight="50" width="50" class="rounded-circle"></a>
        &nbsp
        <a href="https://www.youtube.com/?gl=CO&hl=es-419"><img src="{{asset('/imagenes/youtube.png')}}" eight="50" width="50" class="rounded-circle"></a>
        &nbsp
        <button type="button" class="font-weight-bold btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
            A
        </button>

    </div>
    <!-- Modal-->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable " role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Administrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <!-- inicio de formulario-->
                    <br>
                    <h6>Usuario</h6>
                    <input type="text" class="form-control" name="usuario" placeholder="Ingrese Usuario" required>
                    <br>

                    <h6>Contraseña</h6>
                    <input type="password" class="form-control" name="contra" placeholder="Ingrese Contraseña" required>
                    </p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary  " data-dismiss="modal" aria-label="Close">Cancelar</button>

                        <a href="http://localhost/pizzerialav/public/administrador">
                            <button type="button" class="btn btn-outline-warning">Entrar</button>
                        </a>
                    </div>

                    <!-- fin de formulario-->
                </div>

            </div>
        </div>
</nav>

<!-- Productos -->

<div class="container ">
    <br>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>¡Hola Sapori D’italia, Te Da La Bienvenida!</strong> Tu Podras Chequear Nuestras Pizzas Y Pedir La Que Más Te Guste.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<div class="row">
<!-- Comienzo de ciclo-->

@foreach ($productos as $user)


    <div class="col-lg-4 col-md-4 col-12">
       
        <div class="card">
               
            <img class="card-img-top"  src="{{$user->urlimg}}" alt="Card image cap">
            <div class="card-body">

                <center><h5 class="card-title">{{$user->nombre_producto}}</h5></center>
                <hr>
                <p class="card-text"><h5>Valor:${{$user->valor}}</h5>
            </div>
            <div class="card-footer">
                <center><button type="button" class="btn btn-warning">AGREGAR</button></center>
            </div>
        </div>
        <br>
    </div>

    
    @endforeach
   
    <!-- Fin de ciclo-->
</div>


                                <!--enviar pedido-->

                                <div class="container py-4">
                                    <section>
                                        <center>

                                            <a href="http://localhost/pizzerialav/public/sapori/pedido"><button type="button" class="btn btn-primary btn-lg btn-block btn-outline-warning">
                                                    Realizar Pedido</button></a>





                                        </center>

@endsection