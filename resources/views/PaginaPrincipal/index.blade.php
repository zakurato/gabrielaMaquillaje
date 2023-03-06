<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{asset("IndexCss/index.Css?1.0")}}">
  <title>Pagina Principal</title>
</head>
<body>

  <nav>
    <ul>
      <li><a href="{{route("index")}}">Inicio</a></li>
      <li><a href="#">Acerca de</a></li>
      <li><a href="#">Fotos</a></li>
      <li><a href="#">Contacto</a></li>
      <li><a href="{{route("loginAdministracion")}}">Administración</a></li>
    </ul>
  </nav>
  
  <div class="image-container degradado">
    <img style="width: auto; height: auto;" src="{{URL::asset('imagenesIndex/9bbd6c3e8044d15238a62291595ffc80.jpg')}}" alt="Descripción de la imagen">
    <div class="image-text">
      <p style="font: 250% Arial">MakeuplayerGabriela</p>
    </div>
  </div>



</body>
</html>