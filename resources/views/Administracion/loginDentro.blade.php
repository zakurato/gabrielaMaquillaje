<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="LoginAdministracionCss/loginDentro.Css?1.0">

    <title>Registro imagenes y categorias</title>
</head>
<body>

    <nav>
        <ul>
          <li><a class="aCerrarSesion" href="{{route("loginFuera")}}">Cerrar sesion</a></li>
        </ul>
      </nav>
    <br><br>
    <p style="color: white">{{session("correcto")}}</p>
    <p style="color: white">{{session("eliminado")}}</p>
    <br><br>
            <a href="{{route("vistaCrearCategoria")}}">
                <button>Crear categoría </button>
            </a>
    <br><br><br>
    <form method="POST" action="{{route("store")}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
        <div class="form-group" >
          <label for="inputImage" required>Seleccione la imagen del articulo:</label>
          <input 
              type="file" 
              name="image" 
              id="inputImage"
              class="form-control" 
              required>

          @error('image')
              <span class="text-danger">{{ $message }}</span>
          @enderror
      </div>
  
        <br><br>
        <label for="categoria" required>Categoria:</label>
        <select class="form-select" name="categoria">
          <option selected>Seleccione la categoria</option>
          @foreach ($categorias as $item)
            <option value="{{$item->nombreCategoria}}">{{$item->nombreCategoria}}</option>
          @endforeach
        </select>       
         <br><br><br>
        <button type="submit" class="" style="width: 100%; height: 50px; font: 120% Arial ">Guardar imagen</button>
      </form>

      <br><br><br>
      <h1 style="text-align: center">Categorias</h1>
      <table border="1">
        <tr>
          <td>Categoria</td>
          <td>Trabajo realizado</td>
          <td>Accion</td>
        </tr>
        @foreach ($trabajos as $item)
        <tr>
          <td>{{$item->nombreCategoria}}</td>
          <td>
            <img style="width: 150px; height: 150px;" src="{{URL::asset('imagenesTrabajos/'.$item->imagen)}}">
          </td>
          <td>
            <form action="{{route("eliminarTrabajo")}}" method="GET">
              <input type="hidden" name="id" value="{{$item->id}}">
              <input type="hidden" name="imagen" value="{{$item->imagen}}">
              <button type="submit" class="btnEliminar" onclick="return confirm('¿Esta seguro que desea eliminar esta imagen?')">Eliminar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
</body>
</html>