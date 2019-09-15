@extends('layouts.layout')
@section('content')
<div class="row">
 <section class="content">
  <div class="col-md-8 col-md-offset-2">
   @if (count($errors) > 0)
   <div class="alert alert-danger">
    <strong>Error!</strong> Revise los campos obligatorios.<br><br>
    <ul>
     @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
    </ul>
   </div>
   @endif
   @if(Session::has('success'))
   <div class="alert alert-info">
    {{Session::get('success')}}
   </div>
   @endif
 
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Nuevo Producto</h3>
    </div>
    <div class="panel-body">     
     <div class="table-container">
      <form method="POST" action="{{ route('producto.update',$producto->id) }}"  role="form">
       {{ csrf_field() }}
       <input name="_method" type="hidden" value="PATCH">

       <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="codigo" id="codigo" class="form-control input-sm" value="{{$producto->codigo}}">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="producto" id="producto" class="form-control input-sm" value="{{$producto->producto}}">
         </div>
        </div>
       </div>

 <div class="col-md-12">
            <select name="categoria" class="form-control input-sm"  placeholder="categoria" value="{{$producto->categoria}}">
              <option selected value="VARIOS">Categoria</option>
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
              <option value="VARIOS">VARIOS</option>
            </select>
          </div>

       <div class="form-group">
        <textarea name="descripcion" class="form-control input-sm"  placeholder="descripcion">{{$producto->descripcion}}</textarea>
       </div>

       <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="cod_prov1" id="cod_prov1" class="form-control input-sm" value="{{$producto->cod_prov1}}">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="cod_prov2" id="cod_prov2" class="form-control input-sm" value="{{$producto->cod_prov2}}">
         </div>
        </div>
       </div>

     
       <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="precio" id="precio" class="form-control input-sm" value="{{$producto->precio}}">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="precio_uss" id="precio_uss" class="form-control input-sm" value="{{$producto->precio_uss}}">
         </div>
        </div>
       </div>
       
       <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
         <a href="{{ route('producto.index') }}" class="btn btn-info btn-block" >Atrás</a>
        </div> 
 
       </div>
      </form>
     </div>
    </div>
 
   </div>
  </div>
 </section>
 @endsection