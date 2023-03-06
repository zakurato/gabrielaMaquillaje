<!DOCTYPE html>
<html>
  <head>
    <title>Mi página web</title>
    <link rel="stylesheet" href="{{asset("IndexCss/index.Css")}}">
  </head>
  <body>

    <nav>
        <a id="home-link" href="#">Inicio</a>
        <a href="#">Acerca de MakeuplayerGabriela</a>
        <a href="#">Servicios</a>
    </nav>
    <br><br>
    <div class="container"> <!-- Agregado -->
        <section id="seccion1" class="rotar">
            <img style="width: 100%" src="https://www.zonadamas.mx/wp-content/uploads/2020/04/1pk-70271698_m-1.jpg">
        </section>
        <section id="seccion2" class="rotar">
            <img style="width: 100%" src="https://cdn2.hubspot.net/hubfs/5544577/limpieza-facial-2.jpg">
        </section>
        <section id="seccion3" class="rotar">
            <img style="width: 100%" src="https://proaloecosmetics.com/blog/wp-content/uploads/2017/07/exfoliante-facial.png">
        </section>

        <footer>
            <p>Contacto</p>
        </footer>
  </body>

  <script>
    // Seleccionar el elemento <a> de la opción "Home"
    const homeLink = document.querySelector("#home-link");
  
    // Agregar el evento click
    homeLink.addEventListener("click", function(event) {
      // Prevenir la acción por defecto del enlace (que es recargar la página)
      event.preventDefault();
  
      // Obtener el elemento <body>
      const body = document.querySelector("body");
  
      // Obtener la posición del elemento <body>
      const bodyPosition = body.getBoundingClientRect().top;
  
      // Realizar la animación del scroll usando el método `scrollTo` de window
      window.scrollTo({
        top: bodyPosition,
        behavior: "smooth"
      });
    });
  </script>
  
</html>
