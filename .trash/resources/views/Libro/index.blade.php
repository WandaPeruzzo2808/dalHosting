@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Pedidos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('libro.create') }}" class="btn btn-info" >Añadir Pedido </a>
            </div>
          </div>
        </div>
         <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Detalle Pedido</th>
               <th>Email o telefono de contacto</th>
               <th>Fecha pedido</th>
               <th>Direccion de entrega</th>
               <th>Precio</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($libros->count())  
              @foreach($libros as $libro)  
              <tr>
                <td>{{$libro->nombre}}</td>
                <td>{{$libro->resumen}}</td>
                <td>{{$libro->dato_contacto}}</td>
                <td>{{$libro->f_pedido}}</td>
                <td>{{$libro->dire_entrega}}</td>
                <td>{{$libro->precio}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $libros->render() }}
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
  <div class="pull-right">
   <a class="btn btn-info" aling="center" href="{{url('/home') }}">Volver</a>
</div>
   </div>
</div>
@endsection
 
 
