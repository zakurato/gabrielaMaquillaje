<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("LoginAdministracionCss/vistaCrearCategoria.Css")}}">

    <title>Crear Categoria</title>
</head>
<body>
    <nav>
        <ul>
          <li><a class="aCerrarSesion" href="{{route("loginDentro")}}">Inicio</a></li>
        </ul>
    </nav>

    <br><br><br>
    {{session("categoriaExiste")}}
    {{session("categoriaCorrectamente")}}
    <br><br><br>

    <form method="POST" action="{{route("storeCategoria")}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
        <label for="categoria" required>Nombre de la categoría:</label>
        <input class="form-control" id="campo" type="text" name="nombreCategoria" style="text-transform: uppercase;" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
        <br>
        <button type="submit" class="" style="width: 100%; height: 50px; font: 120% Arial ">Guardar categoría</button>
      </form>


</body>
</html>