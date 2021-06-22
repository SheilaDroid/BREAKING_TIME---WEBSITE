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
	<title>El multijugador online de los juegos free-to-play pasa a ser gratuito en todas las consolas de Xbox</title>
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
  <section >
    <div class="fondo_articulo2">
    <div class="hoja rounded mx-auto d-block">
      <div>
      <div>
        <center><h1>El multijugador online de los juegos free-to-play pasa a ser gratuito en todas las consolas de Xbox</h1></center>
      </div>
     
      <div>
        <img src="./imagenes/articulo3.jpg" class="min-img  rounded mx-auto d-block">
         <iframe id="frame_likes" scrolling="yes" style="height: 8%; width: 60%;"
            src="../../components/likesframe.php?idArticulo=8 & username=<?= $usuario; ?>"></iframe>
            <!--Este style se justifica porque en los .css no agarraba los estilos y no se queria 
            perder el estilo que se tenia pensado-->
      </div>
      </div>
      <div>
        <center><br><hr class="separador"></center>
      <div>
        <div ><h6 class="d-flex justify-content-end autor" > Marco Alvarez - 22/04/2021</h6></div>
        <h4 class="margen_texto"><p> Los videojuegos free-to-play a partir de ahora sí que harán honor a su categoría en las diferentes consolas de Xbox, porque Microsoft acaba de confirmar que cualquier título de este tipo no necesitará disponer de una suscripción a Xbox Live Gold para disfrutar de ellos.</p>

        <p>Esto supone que cualquiera podrá acceder a su modo multijugador online con tan solo contar con una conexión a Internet, sin necesitar nada más para ello. Exactamente esta magnífica novedad afectará a más de 50 juegos de las consolas de Xbox.</p></h4>

        <h4 class="margen_texto"><p>Microsoft ha advertido que la lista irá aumentando a medida que se vayan publicando más títulos free-to-play, de forma que no hará falta volver a preocuparse de renovar la suscripción a Xbox Live Gold para jugar a ellos.</p></h4><br>
      </div>
      <div>
        <img src="./imagenes/articulo3_imagen1.jpg" class=" min-img rounded mx-auto d-block">
      </div>
      <div><br>
        <h4 class="margen_texto"><p>Dicho esto, esta es una lista de todos los juegos a los que afecta esta interesante noticia:</p></h4>
        <h4 class="margen_texto"><ul>
          <li>3on3 FreeStyle</li>
          <li>Aegis Wing</li>
          <li>APB Reloaded</li>
          <li>Apex Legends</li>
          <li>Armored Warfare</li>
          <li>Battle Ages</li>
          <li>Battle Islands</li>
          <li>Battle Islands: Commanders</li>
          <li>Bless Unleashed</li>
          <li>Brawlhalla</li>
          <li>Call of Duty: Warzone</li>
          <li>Crackdown</li>
          <li>Destiny 2</li>
        </ul></h4><br>
      </div>
    </div>
    <iframe id="frame_comments" scrolling="yes"
            src="../../components/commentsbox.php?idArticulo=8 & username=<?= $usuario; ?>"></iframe>
      </div>
      
  </section>

</body>
<footer id="MENU"><!-- por cada nivel de carpetas poner " ../ " --> 
  <iframe id="frame_info" scrolling="no"  src="../../components/info.php"></iframe>
</footer>
</html>