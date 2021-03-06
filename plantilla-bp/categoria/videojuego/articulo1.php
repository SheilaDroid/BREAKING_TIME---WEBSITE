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
	<title>Resident Evil Village: todo sobre el nuevo juego de terror de Capcom</title>
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
          <center><h1>Resident Evil Village: todo sobre el nuevo juego de terror de Capcom</h1></center>
        </div>
        
        <div >
          <img src="./imagenes/articulo1_imagen1.jpg" class="min-img rounded mx-auto d-block">
        </div>
        <iframe id="frame_likes" scrolling="yes" style="height: 8%; width: 60%;"
            src="../../components/likesframe.php?idArticulo=7 & username=<?= $usuario; ?>"></iframe>
            <!--Este style se justifica porque en los .css no agarraba los estilos y no se queria 
            perder el estilo que se tenia pensado-->
      </div>
      <div>
        <div>
          <center><br><hr class="separador"></center>
        </div>
        <div>
          <div ><h6 class="d-flex justify-content-end autor" > Marco Alvarez - 22/04/2021</h6></div>
          
          <h4 class="margen_texto"><p>Resident Evil Village llega el pr??ximo 7 de mayo con el octavo cap??tulo de su historia principal a cargo de Capcom para PC, PlayStation 4, Xbox One, PlayStation 5, Xbox Series y Stadia.</p></h4><br>
          <h4 class="margen_texto"><p> Capcom nos ofrese una aventura que adem??s de abrazar la f??rmula que tan bien funcion?? en primera persona con Resident Evil 7, tambi??n echa la mirada atr??s y se inspira en Resident Evil 4, de qui??n toma prestados varios elementos que nos son f??cilmente reconocibles y nos llevar?? a una aldea maldita aislada en un clima hostil y fr??o, as?? como asediada por extra??as criaturas que hace la vida imposible a los habitantes.</p></h4><br>
          <div>
            <iframe class="tama??o-video rounded mx-auto d-block  "  src="https://www.youtube.com/embed/4nPVUYYC8fQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
            <br><h4 class="margen_texto "><p>Capcom ha revelado el cuarto tr??iler de Resident Evil Village durante la emisi??n Resident Evil Showcase de abril y lo cierto es que ha resaltado toda la espectacularidad que caracteriza a las ??ltimas entregas de la serie, por encima de otros aspectos m??s terror??ficos.</p></h4><br>
        </div>
      </div>
      <iframe id="frame_comments" scrolling="yes"
            src="../../components/commentsbox.php?idArticulo=7 & username=<?= $usuario; ?>"></iframe>
    </div>
    
  </div>
  
  </section>
</body>
<footer id="MENU"><!-- por cada nivel de carpetas poner " ../ " --> 
  <iframe id="frame_info" scrolling="no"  src="../../components/info.html"></iframe>
</footer>
</html>