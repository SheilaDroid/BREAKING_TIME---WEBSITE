<?php
  if(!empty($_GET['usuario'])){
    $usuario=$_GET['usuario'];
  }else{
    $usuario="sin_usuario";
  }
?>
<html>
<head>
	<!-- PONER AQUI EL NOMBRE DE LA CATEGORIA-->
	<title>Ninja Gaiden: Master Collection muestra su accion en un nuevo trailer</title>
  <mera charset="UFT-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	<!--hoja del css-->
	<link rel="stylesheet" href="./formato_articulos.css" type="text/css">
  <link rel="stylesheet" href="../../components/component_css.css" type="text/css">
  <link rel="stylesheet" href="../../components/comments.css" type="text/css">
</head>
<body>
  <head>
    <!--BARRA DE NAVEGACION-->
    <footer id="MENU"><!-- por cada nivel de carpetas poner " ../ " --> 
        <iframe id="frame_menu" scrolling="no" src="../../components/menu2.php?usuario=<?= $usuario; ?>"></iframe>  
    </footer>
    <!-- FIN BARRA DE NAVEGACION-->
  </head>
  <section>
    <div class="fondo_articulo2">
    <div class="hoja rounded mx-auto d-block">
      <div>
        <div>
          <center><h1>Ninja Gaiden: Master Collection muestra su accion en un nuevo trailer</h1></center>
        </div>
        
        <div>
          <img src="./imagenes/articulo2_imagen1.jpg" class="min-img rounded mx-auto d-block">
          <iframe id="frame_likes" scrolling="yes" style="height: 8%; width: 60%;"
            src="../../components/likesframe.php?idArticulo=6 & username=<?= $usuario; ?>"></iframe>
            <!--Este style se justifica porque en los .css no agarraba los estilos y no se queria 
            perder el estilo que se tenia pensado-->
        </div>
      </div>
      <div>
        <div>
          <center><br><hr class="separador"></center>
        </div>
        <div>
          <div ><h6 class="d-flex justify-content-end autor" > Marco Alvarez - 22/04/2021</h6></div>
          <h4 class="margen_texto"><p>Koei Tecmo y Team Ninja han mostrado un nuevo tráiler de Ninja Gaiden: Master Collection dedicado a la acción frenética de la saga, un repaso a técnicas, armas, habilidades y situaciones a las que se enfrentará Ryu Hayabusa en esta colección remasterizada de la trilogía, que se pondrá a la venta el 10 de junio en PS4, Xbox One, Nintendo Switch y PC. Incluye Ninja Gaiden Sigma, Ninja Gaiden Sigma 2 y Ninja Gaiden 3: Razor's Edge, con sus contenidos descargables.</p></h4><br>
          <h4 class="margen_texto"><p>Tal y como se podría esperar, las versiones traerán las habituales mejoras visuales en resolución y framerate a 60 fps más estable. Los tres juegos se basan en sus revisiones: las ediciones Sigma añadían contenido, mejoraban gráficos e incluso sumaban personajes jugables, aunque también se redujo la dificultad y la violencia explícita. En el caso de Razor's Edge no hay dudas: fue mejor que el Ninja Gaiden 3 original. Team Ninja explicó que no tenía opción de recuperar los originales porque su código era insalvable.</p></h4><br>
        </div>
          <iframe class="rounded mx-auto d-block tamaño-video" src="https://www.youtube.com/embed/B0o9Wq51VrQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div>
          <br><h4 class="margen_texto"><p>"Ninja Gaiden es uno de los títulos más importantes y masivos para la marca Team Ninja, pero no hemos podido publicar títulos de la serie en la actual generación de consolas, así que me enorgullece poder lanzarlo en este formato como trilogía", dijo Yosuke Hayashi, jefe del estudio.
          </p></h4><br>
        </div>
      </div>
      <iframe id="frame_comments" scrolling="yes"
            src="../../components/commentsbox.php?idArticulo=6 & username=<?= $usuario; ?>"></iframe>
    </div>
    
  </div>
  
  </section>

</body>
<footer id="MENU"><!-- por cada nivel de carpetas poner " ../ " --> 
  <iframe id="frame_info" scrolling="no"  src="../../components/info.html"></iframe>
</footer>
</html>