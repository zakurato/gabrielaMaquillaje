<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset("LoginAdministracionCss/loginAdministracion.Css")}}">
    <title>Login Administracion</title>
</head>
<body>
    <nav>
        <ul>
          <li><a href="{{route("index")}}">Inicio</a></li>
          <li><a href="{{route("acercaDe")}}">Acerca de MakeuplayerGabriela</a></li>
          <li><a href="{{route("fotos")}}">Fotos</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="{{route("loginAdministracion")}}">Administración</a></li>
        </ul>
      </nav>
      
      <div class="image-container degradado">
        <img style="width: auto; height: auto;" src="{{URL::asset('imagenesIndex/9bbd6c3e8044d15238a62291595ffc80.jpg')}}" alt="Descripción de la imagen">
        <div class="image-text">
            <div class="login-container">
                <form action="{{route("login")}}" method="GET" class="login-form">
                  @csrf
                  <h2>Iniciar sesión</h2>
                  <div class="form-group">
                    <label for="username">Correo</label>
                    <input type="text" name="email" placeholder="Correo..." required>
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" placeholder="Contraseña..." required>
                  </div>
                  {{session("errorLogueo")}}
                  <br><br>
                  <button type="submit">Iniciar sesión</button>
                </form>
              </div>
        </div>
      </div>
    
</body>
</html>