<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("LoginAdministracionCss/vistaCrearCategoria.Css?2.0")}}">

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

      <br><br><br>

          <h1 style="text-align: center">Categorias</h1>
              <table border="1">
                @foreach ($categorias as $item)
                <tr>
                  <td>{{$item->nombreCategoria}}</td>
                  <td>
                    <form action="{{route("eliminarCategoria")}}" method="GET">
                      <input type="hidden" name="id" value="{{$item->id}}">
                      <button type="submit" class="btnEliminar" onclick="return confirm('¿Esta seguro que desea eliminar la categoria?')">Eliminar</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </table>
            <br><br>


</body>
</html>