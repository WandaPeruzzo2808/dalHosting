@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">  
                <div class="card-header">
            <img src="images/loguito.png" >
    
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido!
                    Esperamos tu compra.
                </div>
            </div>            
        </div>
    </div>
</div>

    <div class="container">
    <p>   </p>
    <a class="btn btn-primary btn-lg btn-block" href="{{ route('produs.pdf')}}"> Imprimir LISTADO DE PRECIOS </a>

    <a class="btn btn-primary btn-lg btn-block" href="{{ route('verlista') }}">VER  LISTADO DE PRECIOS</a>
    
    <a class="btn btn-primary btn-lg btn-block" href="{{ route('verLibroPedidos')}}"> HACE TU PEDIDO </a>
                                                  
    <a class="btn btn-primary btn-lg btn-block" href="{{ url('/test')}}"> CONTACTANOS /  INFORMACION DE CONTACTO </a>

    <a class="btn btn-secondary btn-lg btn-block" href="{{ route('verPanelAdmin')}}">SOLO ADMINISTRADOR</a>
    </div>
</div>
@endsection
