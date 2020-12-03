@extends('principal')
@section('content')
<br><br>
<div class="p-3 mb-2 bg-warning text-dark">
<form class="container" style:backgraund:gree>

    <br><h1 align="center">Iniciar sesion</h1><br><br>
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Ingrese con su correo electronico</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">¿Recordar usuario?</label>
  </div>
  <button type="submit" class="btn btn-warning">Ingresar</button>
</form>
</div>
@stop