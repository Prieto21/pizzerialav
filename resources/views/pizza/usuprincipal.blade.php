@extends('pizza.layoutusu')
@section('contenido')
    
<body div class="fondo" background="{{asset('/imagenes/fondo.jpg')}}">
   

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
                
                            <img class="card-img-top" src="{{$user->urlimg}}" alt="Card image cap">
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

                                                <a href="http://localhost/pizzerialav/public/cuenta/pedido"><button type="button" class="btn btn-primary btn-lg btn-block btn-outline-warning">
                                                    Realizar Pedido</button></a>

                                            



                                            </center>


@endsection