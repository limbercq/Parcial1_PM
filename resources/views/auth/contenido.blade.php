<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light  bg-light bg-primary" > 
    <a class="navbar-brand" href="{{route('welcome')}}">INF-324</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('welcome')}}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contactos</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-outline-info my-2 my-sm-0" href="login.html" >Iniciar sesion</a>
          
        </li>
      </ul>
    </div>
  </nav>

    <div class="container">
      @yield('login')
        
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/animacion.js"></script>
</body>
</html>