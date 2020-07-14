<nav class="navbar navbar-expand-lg navbar-light" style="background: {{Auth::user()->color}}!important;" > 
    <a class="navbar-brand" href="{{route('welcome')}}">
    <img src="img/foto.jfif" class="img-fluid img" alt="Responsive image" >   INF - 324</a>
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
                        
            {{Auth::user()->usuario}}
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-slash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
            </svg>
            </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                    {{ csrf_field() }}
                </form>
        </li>
      </ul>
    </div>
  </nav>