@extends('layouts.layout')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Productos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('producto.create') }}" class="btn btn-info" >Añadir Producto</a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Cod.BZM HARD/NFS/NFB</th>
                <th>Categoria</th>
               <th>Producto</th>
               <th>Descripcion</th>
               <th>Cod DIPRA</th>
               <th>Cod GV/ZM/ZEN</th>
               <th>Precio</th>
               <th>Precio U$S</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($productos->count())  
              @foreach($productos as $producto)  
              <tr>
                <td>{{$producto->codigo}}</td>
                <td>{{$producto->categoria}}</td>
                <td>{{$producto->producto}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->cod_prov1}}</td>
                <td>{{$producto->cod_prov2}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->precio_uss}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('ProductoController@edit', $producto->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('ProductoController@destroy', $producto->id)}}" method="post" onclick="return confirm ('Seguro desea eliminar producto?')">
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
          </form>
          </table>
        </div>
      </div>

      {{ $productos->appends(request()->all())->render() }}
    </div>

 </div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container">
   <div class="pull-right">
  <a class="navbar-brand"  action="{{ route('verlista') }}" method="GET" >
    <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" name="codigo" placeholder="Buscar Codigo" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form></a>
</div>
  </div>
</div>
</div>
</div>
</div>
</div>

<div class="container">
   <a type="button" class="btn btn-success btn-lg btn-block" href="{{ route('ver-cambio-precio')}}">Actualizar Precios</a>
      <a type="button" class="btn btn-success btn-lg btn-block"  href="{{url('/home') }}">Volver al inicio</a>
 </div>
</div>
</div>
</div>

@endsection