@extends('auth.contenido')

@section('login')
    <div class="frame">
        <div class="nav">
          <ul class"links">
            <li class="signin-active"><a class="btn">Iniciar Sesion</a></li>
            <li class="signup-inactive"><a class="btn">Registrar</a></li>
          </ul>
        </div>
        <div ng-app ng-init="checked = false">
            <form class="form-signin was-validated" action="{{ route('login')}}" method="post" name="form">
            @csrf
            <div class="{{$errors->has('usuario' ? 'is-invalid' : '')}}">
              <label for="username">Usuario</label>
              <input class="form-styling" value="{{old('usuario')}}" type="text" name="usuario" id="usuario" placeholder=""/>
              {!!$errors->first('usuario','<span class="invalid-feedback visib">:message</span>')!!}
            </div>
            <div class="{{$errors->has('password' ? 'is-invalid' : '')}}">
              <label for="password">Clave</label>
              <input class="form-styling" type="password" name="password" id="password" placeholder=""/>
              {!!$errors->first('password','<span class="invalid-feedback visib">:message</span>')!!}
            </div> 
              <div class="btn-animate">
                <button type="submit" class="btn-signin">Iniciar sesion</button>
              </div>
            </form>
            
            <form class="form-signup" action="" method="post" name="form">
              <label for="fullname">Full name</label>
              <input class="form-styling" type="text" name="fullname" placeholder=""/>
              <label for="email">Email</label>
              <input class="form-styling" type="text" name="email" placeholder=""/>
              <label for="password">Password</label>
              <input class="form-styling" type="text" name="password" placeholder=""/>
              <label for="confirmpassword">Confirm password</label>
              <input class="form-styling" type="text" name="confirmpassword" placeholder=""/>
              <a ng-click="checked = !checked" class="btn-signup">Sign Up</a>
            </form>
          
          </div>
          
          
    </div>

@endsection
