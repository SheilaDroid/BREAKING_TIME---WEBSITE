<?php
  if (!empty($_GET['usuario'])) {
      $usuario=$_GET['usuario'];
  } else {
      $usuario="sin_usuario";
  }
?>
<html>

<head>
    <title>
        Acerca de Nosotros
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <!--hoja del css-->
    <link rel="stylesheet" href="../categoria/style_stylelife.css" type="text/css">
    <link rel="stylesheet" href="../style_homepage.css" type="text/css">
    <link rel="stylesheet" href="./component_css.css" type="text/css">
    <link rel="stylesheet" href="./comments.css" type="text/css">
</head>

<body id="fondo">

    <head>
        <!--BARRA DE NAVEGACION-->
        <footer id="MENU">
            <iframe id="frame_menu" scrolling="no"
                src="./menu2.php?usuario=<?= $usuario; ?>"></iframe>
        </footer>
        <!-- FIN BARRA DE NAVEGACION-->
    </head>

    <div class="container container-fluidwidth: 100% fondo-blanco">
        <br>
        <h2 class="titulos">¿Qué es Breaking Time?</h2>
        <hr>
        <p>Breaking Time es un sitio web en donde los autores y desarrolladores pueden expresar sus puntos de vista
            sobre variados temas y compartirlos entre ellos y entre los usuarios.
            <br>
            Nuestro lema es:
            <br>
            <center>
                <h3><b class="titulos">Si vas a perder el tiempo... ¡Pierdelo Aquí!</b></h3>
            </center>
            <br>
        </p>
        <p>La razón de este lema es porque en vez de perder el tiempo en redes sociales u otras páginas que no te
            brindan nada, aquí puedes divertirte y al mismo tiempo aprender algo nuevo.
            <br>
            Y por supuesto, también nos interesa saber tus opiniones sobre nuestro contenido: es por eso que en cada
            artículo puedes, después
            de crear tu usuario, comentar que te parece nuestro contenido, darle like a los articulos que te hayan
            gustado

            <b>
                <h3>
                    <center>¡E incluso si un artículo te gusto mucho, puedes marcarlo como favorito!</center>
                </h3>
            </b>
            <b>
                <h3>
                    <center>¡¿Ah que es genial?!</center>
                </h3>
            </b>
        </p>
        <p>
            <br>¡Si tienes alguna sugerencia nos encantaría saberla!<br>Ponte en contacto con nosotros:
            <br><b>breakingtime@gmail.com</b>
            <br>
        <h3 class="titulos">Por favor, disfruta tu tiempo en nuestro sitio leyendo el
            contenido que con mucho cariño hicimos para ti :)
        </h3>
        </p>
</body>

</html>