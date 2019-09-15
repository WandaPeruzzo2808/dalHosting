@extends('layouts.layout')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
            Actualizar precios
        </div>
        <div class="panel-body">
          <form method="post" action="{{ route('update-precio-categoria') }}">
          @csrf
          <div class="col-md-6">
            <select name="categoria" class="form-control">
              <option selected value="todos">Todos</option>
              <option value="AUTOMATICOS NUEVOS">AUTOMATICOS NUEVOS</option>
              <option value="AUTOMATICOS REPARADOS">AUTOMATICOS REPARADOS</option>
              <option value="BOBINAS">BOBINAS</option>
              <option value="CAMPOS NUEVOS">CAMPOS NUEVOS</option>
              <option value="CAMPOS RECAMBIO">CAMPOS RECAMBIO</option>
              <option value="CARBONES">CARBONES</option>
              <option value="DESPIECE VARIOS">DESPIECE VARIOS</option>
              <option value="IMPULSORES">IMPULSORES - BENDIX</option>
              <option value="PLAQUETA PORTACARBONES">PLAQUETA PORTACARBONES</option>
              <option value="PLAQUETA PORTADIODOS">PLAQUETA PORTADIODOS</option>
              <option value="REGULADORES">REGULADORES</option>
              <option value="RULEMANES">RULEMANES</option>
            </select>
          </div>
          <div class="col-md-6">
            <input type="number" name="porcentaje" class="form-control">
          </div>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>
</div>
</div>

<div class="container">
      <a type="button" class="btn btn-success btn-lg btn-block"  href="{{url('/home') }}">Volver al inicio</a>
 </div>

@endsection
