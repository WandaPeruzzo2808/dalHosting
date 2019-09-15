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

     <h3 class="panel-title">Nuevo PEDIDO</h3>
    </div>
    <div class="panel-body">     
     <div class="table-container">
      <form method="POST" action="{{ route('libro.store') }}"  role="form">
       {{ csrf_field() }}
       <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Empresa">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="dato_contacto" id="dato_contacto" class="form-control input-sm" placeholder="Telefono de contacto">
         </div>
        </div>
       </div>
 
       <div class="form-group">
        <textarea name="resumen" class="form-control input-sm" placeholder="PEDIDO"></textarea>
       </div>
       <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="f_pedido" id="f_pedido" class="form-control input-sm" placeholder="Fecha">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="precio" id="precio" class="form-control input-sm" placeholder="Precio ">
         </div>
        </div>
       </div>
       <div class="form-group">
        <textarea name="dire_entrega" class="form-control input-sm" placeholder="Direccion de entrega / Datos de contacto"></textarea>
       </div>
       <div class="row">
 
        <div class="col-xs-12 col-sm-12 col-md-12">
         <input  type="submit"  value="Guardar"  id='btn-pedidoWeb' class="btn btn-success btn-block"></button>
         <a href="{{ route('libro.index') }}" class="btn btn-info btn-block" >Atrás</a>
        </div> 
 
       </div>
      </form>
     </div>
    </div>

   </div>
  </div>
 </section>
 @endsection