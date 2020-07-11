@extends('welcome')

@section('menu')
    <nav class="navbar navbar-expand-lg navbar-light  bg-light bg-primary" > 
        <a class="navbar-brand" href="{{route('welcome')}}">INF - 324</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('welcome')}}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contactos</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-info my-2 my-sm-0" href="{{route('inicio')}}" >Iniciar sesion</a>
                
            </li>
            </ul>
        </div>
    </nav>
@endsection