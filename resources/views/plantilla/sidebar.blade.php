<nav class="navbar navbar-expand-lg navbar-light  bg-light bg-primary" > 
    <a class="navbar-brand" href="{{route('welcome')}}">INF - 324</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" @click="menu = 0" href="#">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" @click="menu = 1" href="#">Lista</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" @click="menu = 2" href="#">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" @click="menu = 3" href="#">Notas</a>
        </li>
        <li class="nav-item">            
            <a class="nav-link text-info" href="{{route('logout')}}"   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="zmdi zmdi-power color-blan "></i> Cerrar sesion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                    {{ csrf_field() }}
                </form>
        </li>
      </ul>
    </div>
  </nav>