<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{asset("IndexCss/acercaDe.Css")}}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
  integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <title>Acerca de MakeuplayerGabriela</title>
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
      <p style="font: 100% Arial">MakeuplayerGabriela es una empresa profesional del maquillaje que está enfocada en ganar experiencia en el campo del maquillaje y darse a conocer en el mercado. Es una empresa detallista y responsable que está comprometida a mejorar continuamente y superarse como empresa.

        Con una gran pasión por el maquillaje, MakeuplayerGabriela se dedica a crear looks personalizados para cada cliente, utilizando técnicas avanzadas y productos de alta calidad para lograr un resultado espectacular. Tiene una amplia experiencia en maquillaje para eventos especiales, como bodas, graduaciones, sesiones de fotos y más.
        
        MakeuplayerGabriela se esfuerza por brindar una atención al cliente excepcional, escuchando las necesidades y deseos de cada persona para crear un maquillaje que resalte su belleza natural y los haga sentir confiados y hermosos. Además, está comprometida a mantenerse actualizada con las últimas tendencias en maquillaje y productos para poder ofrecer un servicio de alta calidad.
        
        Con su dedicación, pasión y habilidades, MakeuplayerGabriela está bien en camino para convertirse en una de las mejores Makeuplayer del mercado. Está dispuesta a trabajar arduamente y a esforzarse para alcanzar sus metas y ofrecer un servicio excepcional a sus clientes.
        </p>
        <br><br><br><br><br><br><br>
        <div style="text-align: center">
          <a href="https://www.instagram.com/makeuplayer_gabriela/" target="_blank" style="margin-right: 10px;">
            <i class="fab fa-instagram iconosWF" style="font-size: 30px; color: white"></i>
          </a>
          <a href="https://api.whatsapp.com/send?phone=50687249099&text=Hola!%20Quiero%20obtener%20mas%20información%20sobre%20un%20producto" target="_blank" style="margin-right: 10px;">
            <i class="fab fa-whatsapp iconosWF" style="font-size: 30px; color: white"></i>
          </a>
        </div>

        <p class="copyri">&copy; MakeuplayerGabriela. Todos los derechos reservados. <br>
    </div>
  </div>



</body>
</html>