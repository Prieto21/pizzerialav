@extends('pizza.layoutusu')
@section('contenido')
    


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
<label for="inputEmail4">Direccion</label>
<input type="text" class="form-control" id="inputEmail4" placeholder="Ingrese la direccion">
</div> 
<div class="form-group col-md-12">
<label for="inputPassword4">Barrio</label>
<input type="text" class="form-control" id="inputPassword4" placeholder="Ingrese el barrio">
</div>
</div>
<a href="http://localhost/pizzerialav/public/sapori/cuenta"><button type="button" class="btn btn-outline-warning">Enviar</button></a>
</form>
</center>
</div>
</div>
</div>
</div>


@endsection