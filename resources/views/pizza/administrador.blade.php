@extends('pizza.layout')
@section('contenido')


<body div class="fondo" background="{{asset('/imagenes/fondo.jpg')}}">
    <nav class="navbar navbar-dark bg-warning">
      <span class="navbar-brand mb-0 h1">
        <h4><em>Sapori D’italia</em></h4>
      </span>
      <div class="form-inline my-2 my-lg-0">
  
        <a href="http://localhost/pizzerialav/public/sapori/inicio"><button type="submit" class="font-weight-bold btn btn-outline-dark">
            Cerrar Sesión
          </button></a>
  
      </div>
    </nav>
  
    <!-- Informacion de pedido -->
  
    <br>
    <div class="container py-4" style="background-color:#FAF5F5">
      <center>
        <h4>
          <p class="font-weight-light">PEDIDOS PENDIENTES </p>
        </h4>
      </center>
      <hr>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#usu1">
        carlos el raton
      </button>
  
      <!-- Modal -->
      <div class="modal fade" id="usu1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- parte --->
              <div class="card">
  
                <img class="card-img-top" src="{{asset('/imagenes/pizza1.jpg')}}" alt="Card image cap">
                <div class="card-body">
  
                  <h5 class="card-title">Pizza Hawaiana</h5>
                  <h6>Cantidad: 234</h6>
                </div>
  
              </div>
              <!-- parte --->
  
              <!-- parte --->
              <div class="card">
  
                <img class="card-img-top" src="{{asset('/imagenes/pizza2.jpg')}}" alt="Card image cap">
                <div class="card-body">
  
                  <h5 class="card-title">Pizza Diávola</h5>
                  <h6>Cantidad: 144</h6>
                </div>
  
              </div>
              <!-- parte --->
  
              <!-- parte --->
              <div class="card">
  
                <img class="card-img-top" src="{{asset('/imagenes/pizza3.jpg')}}" alt="Card image cap">
                <div class="card-body">
  
                  <h5 class="card-title">Pizza primavera</h5>
                  <h6>Cantidad: 3</h6>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
              <a href="http://localhost/pizzerialav/public/administrador">
                <button type="button" class="btn btn-success">Confirmar</button>
              </a>
  
            </div>
          </div>
          <!-- parte --->
        </div>
      </div>
      <!-- Button trigger modal --><br> <br>
      <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#usu2">
        Enrique el lagarto
      </button>
  
      <!-- Modal -->
      <div class="modal fade" id="usu2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- parte --->
              <div class="card">
  
                <img class="card-img-top" src="{{asset('/imagenes/pizza6.jpg')}}" alt="Card image cap">
                <div class="card-body">
  
                  <h5 class="card-title">Pizza Hawaiana</h5>
                  <h6>Cantidad: 234</h6>
                </div>
  
              </div>
              <!-- parte --->
  
              <!-- parte --->
              <div class="card">
  
                <img class="card-img-top" src="{{asset('/imagenes/pizza10.jpg')}}" alt="Card image cap">
                <div class="card-body">
  
                  <h5 class="card-title">Pizza Diávola</h5>
                  <h6>Cantidad: 144</h6>
                </div>
  
              </div>
              <!-- parte --->
  
              <!-- parte --->
              <div class="card">
  
                <img class="card-img-top" src="{{asset('/imagenes/pizza5.jpg')}}" alt="Card image cap">
                <div class="card-body">
  
                  <h5 class="card-title">Pizza primavera</h5>
                  <h6>Cantidad: 3</h6>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
              <a href="http://localhost/pizzerialav/public/administrador">
                <button type="button" class="btn btn-success">Confirmar</button>
              </a>
  
            </div>
          </div>
          <!-- parte --->
        </div>
      </div>
      <!-- Button trigger modal --> <br> <br>
      <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#usu3">
        pepe la llama
      </button>
  
      <!-- Modal -->
      <div class="modal fade" id="usu3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- parte --->
              <div class="card">
  
                <img class="card-img-top" src="{{asset('/imagenes/pizza7.jpg')}}" alt="Card image cap">
                <div class="card-body">
  
                  <h5 class="card-title">Pizza Hawaiana</h5>
                  <h6>Cantidad: 234</h6>
                </div>
  
              </div>
              <!-- parte --->
  
              <!-- parte --->
              <div class="card">
  
                <img class="card-img-top" src="{{asset('/imagenes/pizza5.jpg')}}" alt="Card image cap">
                <div class="card-body">
  
                  <h5 class="card-title">Pizza Diávola</h5>
                  <h6>Cantidad: 144</h6>
                </div>
  
              </div>
              <!-- parte --->
  
              <!-- parte --->
              <div class="card">
  
                <img class="card-img-top" src="{{asset('/imagenes/pizza8.jpg')}}" alt="Card image cap">
                <div class="card-body">
  
                  <h5 class="card-title">Pizza primavera</h5>
                  <h6>Cantidad: 3</h6>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
              <a href="http://localhost/pizzerialav/public/administrador">
                <button type="button" class="btn btn-success">Confirmar</button>
              </a>
  
            </div>
          </div>
          <!-- parte --->
        </div>
      </div>
      <!-- Button trigger modal -->
      <hr> <br>
      <center><button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#producto">
          Agregar Producto
        </button></center>
  
      <!-- Modal -->
      <div class="modal fade" id="producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title" id="exampleModalLabel">NUEVO PRODUCTO</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
  
            <form action="{{ route('saporipizza.store') }}" method="POST">
    @csrf
    <input type="hidden" name="urlimg" value="imagenes/fondo.jpg">
              <h6>Nombre del producto:</h6> <input type="text" name="nombre_producto" id="" placeholder="ingrese el nombre"><br>
              <h6>valor del producto:</h6> <input type="text" name="valor" id=""placeholder="ingrese el valor"><br>
              <br>
              <div class="modal-footer">

                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  
                    <button type="submit" class="btn btn-success">Agregar</button>
              
      
                </div>
                    </form>
            </div>
           
          </div>
        </div>
      </div>
  
  
    
@endsection