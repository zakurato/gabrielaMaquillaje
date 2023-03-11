<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("IndexCss/index.Css")}}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-B0+4QYYua9cJmxxnT0ZBm2HsTfVoahdDxiJ+0MlxdH1Gq3E9z1+qKTZJvAz8WfM+" crossorigin="anonymous">


  <title>Pagina Principal</title>
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
  
  <div class="image-container degradado">
    <img style="width: auto; height: auto;" src="{{URL::asset('imagenesIndex/9bbd6c3e8044d15238a62291595ffc80.jpg')}}" alt="Descripción de la imagen">
    <div class="image-text">
      <p style="font: 250% Arial">MakeuplayerGabriela</p>
    </div>
  </div>





</body>


</html>