@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Dal  -  LISTA DE PRECIOS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="panel body">
    <p>

    </p>
<div class="table-responsive">
        <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th scope="col">Codigo</th>
              <th scope="col">Categoria</th>
               <th scope="col">Producto</th>
               <th scope="col">Descripcion</th>
               <th scope="col">Cod DIPRA</th>
               <th scope="col">Cod GV</th>
               <th scope="col">Precio</th>
              <th scope="col">Precio U$S</th>
             </thead>

             
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
</tr>
@endforeach
</tbody>
</table>
 {{ $productos->appends(request()->all())->render() }}                
  </div>
            </div>       

        </div>
      </div>

    </div>
      
    </div>
          
</div>
<div>
  <div class="conteiner-fluid">
        <div class="row justify-content-center">
        <div class="col-md-10">
<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
  <a class="navbar-brand" href="images/logoinfo.png">Dal</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Buscar por CATEGORIA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'AUTOMATICOS NUEVOS'])}}">AUTOMATICOS NUEVOS</a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'AUTOMATICOS REPARADO'])}}">AUTOMATICOS REPARADOS</a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'BOBINA'])}}">BOBINAS</a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'CAMPOS NUEVO'])}}">CAMPOS NUEVOS</a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'CAMPOS RECAMBIO'])}}">CAMPOS RECAMBIO</a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'CARBONES'])}}">CARBONES</a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'DESPIECE'])}}">DESPIECE VARIOS</a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'IMPULSORES'])}}">IMPULSORES - BENDIX</a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'PLAQUETA PORTACARBON'])}}">PLAQUETAS PORTACARBONES</a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'PLAQUETA PORTADIODOS'])}}">PLAQUETAS PORTADIODOS </a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'Reguladores'])}}">REGULADORES</a>
          <a class="dropdown-item" href="{{ route('verlista', ['search' => 'RULEMANES'])}}">RULEMANES</a>

        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{ route('verlista') }}" method="GET">
      <input class="form-control mr-sm-2" name="codigo" type="codigo" placeholder="Codigo HARD/DAL" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</div>
</div>
</div>
</div>

<div class="container">
      <a type="button" class="btn btn-success btn-lg btn-block"  href="{{url('/home') }}">Volver al inicio</a>
 </div>
</div>
</div>
@endsection








