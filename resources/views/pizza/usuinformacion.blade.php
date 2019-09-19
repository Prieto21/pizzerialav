@extends('pizza.layoutusu')
@section('contenido')
    


<!-- informacion del usuario -->

<div class="container"> <br>
<div class="alert alert-secondary" role="alert">
<center>
<table>
  <tr>
      <th><img src="{{asset('/imagenes/usuario.png')}}" class="card-img-top" style="width: 18rem;" alt="..."></th>
      <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
      <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
      <th><div class="card" style="width: 18rem;">

<div class="card-body">
<h5 class="card-title">Pepe26</h5>

</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Armando Parades</li><br>
<li class="list-group-item">pepe123@gmail.com</li><br>
<li class="list-group-item">1234</li><br>
<li class="list-group-item"><center><button type="button" class="btn btn-warning">Modificar</button></center></li>

</ul>

</div></th>
  </tr>
</table>

</center>
</div>
</div>

@endsection