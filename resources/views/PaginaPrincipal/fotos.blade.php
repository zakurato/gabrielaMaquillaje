<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("IndexCss/fotos.Css")}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Fotos</title>
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


      <br><br><br>


      @foreach ($categorias as $item2)
      <h1 style="text-align: center">{{$item2->nombreCategoria}}</h1>
      <!-- Carousel -->
      <div id="demo-{{$item2->nombreCategoria}}" class="carousel slide" data-bs-ride="carousel">
    
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
    
      
      

  
</body>
</html>