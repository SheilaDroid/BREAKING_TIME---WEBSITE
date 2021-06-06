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
</head>

<body>
	<header>
		<!--Barra de Navegación-->
		<nav class="navbar navbar-expand-lg up">
			<div class="container-fluid d-flex justify-content-evenly navega">
				<a class="navbar-brand" href="../index.html" target="_parent">
					<img src="./imagenes/coffee-time.png" width="50" height="50" alt="">
				</a>
				<a class="navbar-brand letrasNav" id="principal" href="../index.html" target="_parent">BREAKING TIME</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!--Elementos de la navbar-->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link letrasNav" href="./videojuegos.html" target="_parent">Videojuegos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link letrasNav" href="./hacking.html" target="_parent">Hacking</a>
						</li>
						<li class="nav-item">
							<a class="nav-link letrasNav" href="./computacion.html" target="_parent">Computación</a>
						</li>
						<li class="nav-item">
							<a class="nav-link letrasNav" href="./stylelife.html" target="_parent">Estilo de Vida</a>
						</li>
					</ul>
				</div>
				<!--Buscador-->
				<form class="form-inline buscador">
					<input class="form-control mr-sm-2 mover_buscador" type="search" placeholder="Buscar..."
						aria-label="Search">
					<button class="btn btn-info mover_boton_buscador" type="submit">Buscar</button>
				</form>
		</nav>
	</header>

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
							<a href="./articulo1_stylife.html" target="_parent" class="btn btn-primary color_boton">Leer</a>
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
							<a href="./articulo2_stylife.html" class="btn btn-primary color_boton">Leer</a>
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
<footer>
	<section>
		<div class="grid-container" id="footer_color">
			<div class="container-fluid col margen-arriba">
				<a>
					<h3 id="footer_title">Breaking Time</h3>
				</a>
				<div class="row" id="fandom">
					<!--Primer columna: EXPLORE PROPERTIES Y FOLLOW US-->
					<div class="col-md-3 offset-4">
						<h5 id="titulos_footer">Categorías
						</h5>
						<p class="footer_lista">
							<a class="footer_lista" href="./videojuegos.html" target="_parent">Videojuegos</a><br>
							<a class="footer_lista" href="./hacking.html" target="_parent">Hacking</a><br>
							<a class="footer_lista" href="./computacion.html" target="_parent">Computación</a><br>
							<a class="footer_lista" href="./stylelife.html" target="_parent">Estilo de Vida</a><br>
						</p>
					</div>

					<div class="col-md-3">
						<h5 id="titulos_footer">Acerca de</h5>
						<p class="footer_lista">
							<a class="footer_lista" href="#" target="_blank">¿Qué es Breaking Time?</a><br>
						</p>
						<h5 id="titulos_footer">Follow Us
						</h5>
						<div class="margen-redes">
							<img src="../imagenes/facebook.png" class="img-fluid img_footer" alt="img-thumbnail">
							<img src="../imagenes/twitter.png" class="img-fluid img_footer" alt="img-thumbnail">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--SECCION DONDE VA EL COPYRIGHT-->
	<div class="grid-container derechos">
		<p id="copy">Copyright 2021 Breaking Time</p>
	</div>
</footer>

</html>