@extends('pizza.layout')

@section('contenido')
<br> <br> <br>
<center>
<table>
    <tr>
        <th  width="400"><div class="container">
<div class="alert alert-secondary" role="alert">
    
<center><h3>LOGIN</h3></center> <hr>
<!--///////////////////////////////////////////////////-->

@yield('login')

<!--///////////////////////////////////////////////////-->
    
    
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">USUARIO</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre de usuario">
    <br>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CONTRASEÑA</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
  </div>
  <center>
  <a href="http://localhost/pizzerialav/public/sapori/cuenta"><button type="button" class="btn btn-warning">Entrar</button></a>
  </center>
  </form>
<hr>
<a href="" data-toggle="modal" data-target="#exampleModalScrollable"> Registrarse</a>


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<a href="http://localhost/pizzerialav/public/sapori/inicio">Solo pedido</a>




</div>
<!-- Modal-->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable " role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Registro</h5>
       
      </div>
      <div class="modal-body">
      
  
  <!-- inicio de formulario-->
    <br>
    <h6>Nombre</h6>
    <input type="text" class="form-control" name="usuario" placeholder="Nombre completo" required>
    <br>
    
<h6>Usuario</h6>
    <input type="password"  class="form-control" name="contra" placeholder="Nombre de usuario" required>
    <br>
    <h6>Correo</h6>
    <input type="text" class="form-control" name="usuario" placeholder="Ingrese su correo" required>
    <br>
    
<h6>Contraseña</h6>
    <input type="password"  class="form-control" name="contra" placeholder="Crear contraseña" required>
    
    <div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary  " data-dismiss="modal" aria-label="Close" >Cancelar</button>
      
        <a href="http://localhost/pizzerialav/public/ingreso">
        <button type="button" class="btn btn-outline-warning">Guardar</button>
        </a>
      </div>

<!-- fin de formulario-->
      </div>
      
    </div>
  </div>    
</div></th>
    </tr>
</table>
</center>

    
@endsection