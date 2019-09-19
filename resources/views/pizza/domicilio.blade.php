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
           

        </div>
    </nav>

    <div class="row">
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
       <center> <!-- pedido -->
    
    <table>
        <tr>
            <th >
                <img  src="{{asset('/imagenes/pizza3.jpg')}}" width="230" height="150"><br>
                
                <center>
                    
                <button type="button" class="btn btn-danger">-</button>
                <input type="number" placeholder="0">
                <button type="button" class="btn btn-success">+</button>
                </center>
  
          </th>
            
        </tr>
        <tr>
            <th ><br><img  src="{{asset('/imagenes/pizza5.jpg')}}" width="150" height="150">
            <center>
                    
                    <button type="button" class="btn btn-danger">-</button>
                    <input type="number" placeholder="0">
                    <button type="button" class="btn btn-success">+</button>
                    </center></th>
            
        </tr>
        <tr>
            <th ><br><img  src="{{asset('/imagenes/pizza7.jpg')}}"width="150" height="150" >
            <center>
                    
                    <button type="button" class="btn btn-danger">-</button>
                    <input type="number" placeholder="0">
                    <button type="button" class="btn btn-success">+</button>
                    </center></th>
            
        </tr>
    </table></center>
      </div>
    </div>
  </div>
  <div class="col-sm-7">
    <div class="card">
      <div class="card-body">
      <center>
   
        <div class="container py-4" style="background-color:#FAF5F5">
            <center><h4><p class="font-weight-light">FORMULARIO PARA CONTINUAR CON EL DOMICILIO</p></h4></center>
           <h6> <p class="font-weight-normal">POR FAVOR INGRESE:</p> </h6>
            
<!-- inicio de formulario-->
                

<form>
  <div class="form-row">
  <div class="form-group col-md-12">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Ingrese la direccion">
    </div> 
    <div class="form-group col-md-12">
      <label for="inputEmail4">Direccion</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Ingrese la direccion">
    </div> 
    <div class="form-group col-md-12">
      <label for="inputPassword4">Barrio</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Ingrese el barrio">
    </div>
  </div>
  <a href="http://localhost/pizzerialav/public/sapori/inicio"><button type="button" class="btn btn-outline-warning">Enviar</button></a>
</form>
  </center>
      </div>
    </div>
  </div>
</div>

   

@endsection