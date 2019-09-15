@extends('layouts.app')

@section('content')
<!-- header -->
            <div class="content" align="center">
                <img src="images/arranque.png" class="img-fluid" alt="Responsive image" >
                <h1>  <strong> Dal</strong></h1>
                {{$date}}
            </div>


<!-- Footer -->
    <footer id="footer" class="pb-4 pt-4">
      <div class="container">
        <div class="row text-center">

    <a class="btn btn-primary btn-lg btn-block" href="{{ route('home')}}"> Ingresa al Sistema / Registrate</a>
        </div>
      </div>
    </footer>
@endsection

