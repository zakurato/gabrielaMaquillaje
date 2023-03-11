<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("IndexCss/fotos.Css")}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
    integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <title>Fotos</title>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <li><a class="dropdown-item aNav" href="{{route("index")}}">Inicio</a></li>
              <li><a class="dropdown-item aNav" href="{{route("acercaDe")}}">Acerca de MakeuplayerGabriela</a></li>
              <li><a class="dropdown-item aNav" href="{{route("fotos")}}">Fotos</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>


      <br><br><br>


      @foreach ($categorias as $item2)
      <h1 style="text-align: center">{{$item2->nombreCategoria}}</h1>
      <!-- Carousel -->
      <div id="demo-{{$item2->nombreCategoria}}" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          @php $count = 0 @endphp
          @foreach($trabajos as $item)
            @if ($item->nombreCategoria == $item2->nombreCategoria)
              <button type="button" data-bs-target="#demo-{{$item2->nombreCategoria}}" data-bs-slide-to="{{$count}}" class="@if($count == 0) active @endif"></button>
              @php $count++ @endphp
            @endif
          @endforeach
        </div>
    
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          @php $active = true @endphp
          @foreach($trabajos as $item)
            @if ($item->nombreCategoria == $item2->nombreCategoria)
              <div class="carousel-item @if($active) active @endif">
                <img style="width: 300px; height: 300px;" src="{{ asset('imagenesTrabajos/'.$item->imagen) }}" class="d-block w-100">
              </div>
              @php $active = false @endphp
            @endif
          @endforeach
        </div>
    
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo-{{$item2->nombreCategoria}}" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo-{{$item2->nombreCategoria}}" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
      <br>
    @endforeach
      
    <footer>
    <div style="text-align: center">
      <a href="https://www.instagram.com/makeuplayer_gabriela/" target="_blank" style="margin-right: 10px;">
        <i class="fab fa-instagram iconosWF" style="font-size: 30px; color: white"></i>
      </a>
      <a href="https://api.whatsapp.com/send?phone=50687249099&text=Hola!%20Quiero%20obtener%20mas%20información%20sobre%20un%20producto" target="_blank" style="margin-right: 10px;">
        <i class="fab fa-whatsapp iconosWF" style="font-size: 30px; color: white"></i>
      </a>
    </div>

    <p class="copyri">&copy; MakeuplayerGabriela. Todos los derechos reservados. <br>
    </footer>

  
</body>
</html>