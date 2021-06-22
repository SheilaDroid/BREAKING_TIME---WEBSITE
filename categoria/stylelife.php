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
	<title>Style Life | Breaking Time</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
		integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
		integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
		crossorigin="anonymous"></script>
	<!--hoja del css-->
	<link rel="stylesheet" href="./style_stylelife.css" type="text/css">
	<link rel="stylesheet" href="../style_homepage.css" type="text/css">
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
	<!--Imagen relacionada a la categoria
	Se le agregrará: Posible slideshow y hover effects
	-->
		<div class="container-fluid margen-banner">
			<img src="./imagenes/stylelife_img/notas.jpg" class="img-fluid" alt="Responsive image">
		</div>
	</section>

	<section>
	<!--Descripcion de que temas se hablan en esta categoria-->
		<div class="container container-fluidwidth: 100%">
			<br>
			<h1 id="recientes">Aqui Encontrarás</h1>
			<hr>
			<div class="row espacio-1">
				<div class="col align-self-center">
					<p id="descripcion">Consejos y Recomendaciones sobre: <br>
						Finanzas Personales<br>
						Organización<br>
						Recomendaciones de Libros<br>
						Sobre cualquier tema que pueda ayudarte a mejorar y administrar de mejor manera varios aspectos de tu vida
					</p>
				</div>
			</div>
			<hr>
		</div>
	</section>

	<section>
		<!--Aqui van la secccion de todos los articulos-->
		<div class="container-fluid container-articulos">
			<br>
			<h1 class="white_titulo">Todos los Artículos</h1>
			<hr>
			<!--Primera fila de articulos-->
			<div class="row espacio-1">
				<div class="col align-self-center ">
					<div class="card bg-light text-white">
						<img class="card-img" src="../categoria/imagenes/stylelife_img/art1.jpg" alt="Card image">
						<div class="card-img-overlay">
							<br><br><br>
							<h5 class="card-title titulo_tarjetas">Mejores Apps para tomar Notas en Android</h5>
							<p class="card-text">Descubre las mejores apps para tu Android para tomar notas y hacer listas.</p>
							<p class="card-text">Actualizado recientemente</p>
							<a href="./stylelife/articulo1_stylife.php?usuario=<?= $usuario; ?>" target="_parent" class="btn btn-primary color_boton">Leer</a>
						</div>
					</div>
				</div>
				<div class="col align-self-center ">
					<div class="card bg-dark text-white">
						<img class="card-img" src="../categoria/imagenes/stylelife_img/art2.jpg" alt="Card image">
						<div class="card-img-overlay">
							<br>
							<h5 class="card-title titulo_tarjetas">Canales de Youtube Recomendados en Finanzas Personales y Productividad</h5>
							<p class="card-text">Si quieres aprender más acerca de Finanzas Personales, manejo efectivo del tiempo y Productividad,
								no dudes en echar un ojo a estos canales.
							</p>
							<p class="card-text">Actualizado recientemente</p>
							<a href="./stylelife/articulo2_stylife.php?usuario=<?= $usuario; ?>" class="btn btn-primary color_boton">Leer</a>
						</div>
					</div>
				</div>
				<div class="col align-self-center ">
					<div class="card bg-dark text-white">
						<img class="card-img" src="../categoria/imagenes/stylelife_img/art3.jpg" alt="Card image">
						<div class="card-img-overlay">
							<br><br><br>
							<h5 class="card-title titulo_tarjetas">¿Dónde empezar a invertir en México 2021?</h5>
								<p class="card-text">¿Quieres empezar a invertir? Te explicamos algunas cosas que debes considerar.</p>
							<p class="card-text">Actualizado recientemente</p>
							<a href="#" class="btn btn-primary color_boton">Leer</a>
						</div>
					</div>
				</div>
			</div>
			<!--Segunda fila de articulos-->
			<div class="row espacio-1">
				<div class="col align-self-center ">
					<div class="card bg-dark text-white">
						<img class="card-img" src="../categoria/imagenes/stylelife_img/soon.jpg" alt="Card image">
						<div class="card-img-overlay">
							<br><br><br>
							<h5 class="card-title titulo_tarjetas">Titulo del Articulo</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
								additional content. This content is a little bit longer.</p>
							<p class="card-text">Actualizado recientemente</p>
							<a href="#" class="btn btn-primary color_boton">Leer</a>
						</div>
					</div>
				</div>
				<div class="col align-self-center ">
					<div class="card bg-dark text-white">
						<img class="card-img" src="../categoria/imagenes/stylelife_img/soon.jpg" alt="Card image">
						<div class="card-img-overlay">
							<br><br><br>
							<h5 class="card-title titulo_tarjetas">Titulo del Articulo</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
								additional content. This content is a little bit longer.</p>
							<p class="card-text">Actualizado recientemente</p>
							<a href="#" class="btn btn-primary color_boton">Leer</a>
						</div>
					</div>
				</div>
				<div class="col align-self-center ">
					<div class="card bg-dark text-white">
						<img class="card-img" src="../categoria/imagenes/stylelife_img/soon.jpg" alt="Card image">
						<div class="card-img-overlay">
							<br><br><br>
							<h5 class="card-title titulo_tarjetas">Titulo del Articulo</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
								additional content. This content is a little bit longer.</p>
							<p class="card-text">Actualizado recientemente</p>
							<a href="#" class="btn btn-primary color_boton">Leer</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
<footer id="MENU"><!-- por cada nivel de carpetas poner " ../ " --> 
  <iframe id="frame_info" scrolling="no"  src="../components/info.php"></iframe>
</footer>

</html>