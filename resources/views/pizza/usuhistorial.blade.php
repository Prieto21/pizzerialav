@extends('pizza.layoutusu')
@section('contenido')
    


<!-- informacion del usuario -->

<div class="container"> <br>
<div class="alert alert-secondary" role="alert">
<center>

<h4 class="alert-heading">Historial de pedidos</h4> <hr>
<div class="card-deck">
    <div class="card">

        <img class="card-img-top" src="{{asset('/imagenes/pizza1.jpg')}}" alt="Card image cap">
        <div class="card-body">

            <h5 class="card-title">Pizza Hawaiana</h5>
           
        </div>
        <div class="card-footer">
        <center>29/08/19</center>
        </div>
    </div>
    <div class="card">

        <img class="card-img-top" src="{{asset('/imagenes/pizza2.jpg')}}" alt="Card image cap">
        <div class="card-body">

            <h5 class="card-title">Pizza Diávola</h5>
            
        </div>
        <div class="card-footer">
        <center>25/08/19</center>
        </div>
    </div>
    <div class="card">

        <img class="card-img-top" src="{{asset('/imagenes/pizza3.jpg')}}" alt="Card image cap">
        <div class="card-body">

            <h5 class="card-title">Pizza primavera</h5>
           
        </div>
        <div class="card-footer">
        <center>18/08/19</center>
        </div>
    </div>


</center>
</div>
</div>

@endsection