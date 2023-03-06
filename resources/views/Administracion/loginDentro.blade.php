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
          <li><a href="{{route("loginFuera")}}">Cerrar session</a></li>
        </ul>
      </nav>
    <br><br>
    <button>Crear categoria</button>
    <br><br><br>
    <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
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
    

        <label for="categoria" required>Categoria:</label>
        <input class="form-control" type="text">
        <br>
        <button type="submit" class="" style="width: 100%; height: 50px; font: 120% Arial ">Guardar imagen</button>
      </form>
</body>
</html>