<?php 
  $usuario=$_GET['usuario'];
?>


<html>
<head>
	<!-- PONER AQUI EL NOMBRE DE LA CATEGORIA-->
  <mera charset="UFT-8">
	<title>Videojuegos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	<!--hoja del css-->
	<link rel="stylesheet" href="./videojuego/formato.css" type="text/css">
  <link rel="stylesheet" href="../components/component_css.css" type="text/css">
</head>
<body>
  <head>
    <!--BARRA DE NAVEGACION-->
    <footer id="MENU">
        <iframe id="frame_menu" scrolling="no"  src="../components/menu2.php?usuario=<?= $usuario; ?>"></iframe> 
    </footer>
    <!-- FIN BARRA DE NAVEGACION-->
  </head>
	<section>
		<!--imagen principal -->
		<nav class="text-center">
			<img src="./videojuego/imagenes/imagen_grande.jpg " class="img-fluid dimensiones_imagen " alt="...">
		</nav>
		
	</section>
	<section class="fondo1" >
		<nav >
			<div >
        <h2 class="texto_destacados">DESTACADOS</h2>
        <div class="container">
          <div class="row align-items-center">
            <div class="col">
              <figure class="figure"><!--imagen destacado 1-->
              <a href=""><img src="./videojuego/imagenes/destacado_imagen1.jpg" class="figure-img img-fluid rounded dimensiones_imagen1_destacado" alt="..."></a>
              </figure>
            </div>
            <div class="col">
              <figure class="figure"><!--imagen destacado 2-->
              <a href=""><img src="./videojuego/imagenes/destacado_imagen2.jpg" class="figure-img img-fluid rounded dimensiones_imagen2_destacado d-flex justify-content-between" alt="..."></a>
              </figure>
              <figure class="figure"><!--imagen destacado 3-->
              <a href="./videojuego/articulo2.html"><img src="./videojuego/imagenes/destacado_imagen3.jpg" class="figure-img img-fluid rounded dimensiones_imagen3_destacado d-flex justify-content-between" alt="..."></a>
            </div>
          </div>
        </div>
				</figure>
			</div>
		</nav><br>
	</section>
	<section class="fondo2" >
		<br>
		<h2 class="d-flex justify-content-center">Todos los Articulos</h2><br>
		<div>
		<div class="container">
  			<div class="row gx-5 d-flex justify-content-evenly">
    			<div class="col">
      				<div class="card pre-card marco" ><!--imagen articulo 1,1-->
  					<a href="./videojuego/articulo2.html"><img src="./videojuego/imagenes/articulo2.jpg" class="card-img-top" alt="..."></a>
  					<div class="card-body">
  					<a href="./videojuego/articulo2.html" class="quitar_efecto_link"><h5 class="card-title">Ninja Gaiden: Master Collection muestra su acción en un nuevo tráiler</h5></a>
    				<p class="card-text">La colección remasteriza de Ninja Gaiden para plataformas actuales; llegará el 10 de junio a Xbox One, PS4, Nintendo Switch y PC.</p><a href="./videojuego/articulo2.html" class="quitar_efecto_link">Leer mas..</a>
  					</div>
					</div>
    			</div>
    			<div class="col">
      				<div class="card pre-card marco" ><!--imagen articulo 1,2-->
  					<a href="./videojuego/articulo1.html"><img src="./videojuego/imagenes/articulo1.jpg" class="card-img-top" alt="..."></a>
  					<div class="card-body">
  					<a href="./videojuego/articulo1.html" class="quitar_efecto_link"><h5 class="card-title">Resident Evil Village: todo sobre el nuevo juego de terror de Capcom</h5></a>
    				<p class="card-text">Resident Evil Village llega el próximo 7 de mayo en PC, PS4, PS5, Xbox One, Series y Stadia para convertirse en una nueva oda al terror más descarnado.</p><a href="./videojuego/articulo1.html" class="quitar_efecto_link">Leer mas..</a>
  					</div>
					</div>
    			</div>
    			<div class="col">
      				<div class="card pre-card marco" ><!--imagen articulo 1,3-->
  					<a href="./videojuego/articulo3.html"><img src="./videojuego/imagenes/articulo3.jpg" class="card-img-top" alt="..."></a>
  					<div class="card-body">
  					<a href="./videojuego/articulo3.html" class="quitar_efecto_link"><h5 class="card-title">El multijugador online de los juegos free-to-play pasa a ser gratuito en todas las consolas de Xbox</h5></a>
    				<p class="card-text">Los videojuegos free-to-play a partir de ahora sí que harán honor a su categoría en las diferentes consolas de Xbox.</p><a href="./videojuego/articulo3.html" class="quitar_efecto_link">Leer mas..</a>
  					</div>
					</div>
    			</div>
  			</div><br>
  		</div>
  		<div class="container">
  			<div class="row gx-5 align-items-start">
    			<div class="col">
      				<div class="card pre-card marco" ><!--imagen articulo 2,1-->
  					<a href=""><img src="./videojuego/imagenes/articulo1.jpg" class="card-img-top" alt="..."></a>
  					<div class="card-body">
  					<a href="" class="quitar_efecto_link"><h5 class="card-title">PROXIMAMENTE</h5></a>
    				<p class="card-text">PROXIMAMENTE</p><a href="" class="quitar_efecto_link">Leer mas..</a>
  					</div>
					</div>
    			</div>
    			<div class="col">
      				<div class="card pre-card marco" ><!--imagen articulo 2,2-->
  					<a href=""><img src="./videojuego/imagenes/articulo1.jpg" class="card-img-top" alt="..."></a>
  					<div class="card-body">
  					<a href="" class="quitar_efecto_link"><h5 class="card-title">PROXIMAMENTE</h5></a>
    				<p class="card-text">PROXIMAMENTE</p><a href="" class="quitar_efecto_link">Leer mas..</a>
  					</div>
					</div>
    			</div>
    			<div class="col">
      				<div class="card pre-card marco" ><!--imagen articulo 2,3-->
  					<a href=""><img src="./videojuego/imagenes/articulo1.jpg" class="card-img-top" alt="..."></a>
  					<div class="card-body">
  					<a href="" class="quitar_efecto_link"><h5 class="card-title">PROXIMAMENTE</h5></a>
    				<p class="card-text">PROXIMAMENTE</p><a href="" class="quitar_efecto_link">Leer mas..</a>
  					</div>
					</div>
    			</div>
  			</div>
  		</div>
  		<br><br>
	</section>

</body>
<footer id="MENU"><!-- por cada nivel de carpetas poner " ../ " --> 
  <iframe id="frame_info" scrolling="no"  src="../components/info.html"></iframe>
</footer>
</html>