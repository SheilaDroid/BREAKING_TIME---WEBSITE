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
		Breaking Time | Homepage
	</title>
	<link rel="stylesheet" href="./plantilla-bp/css/bootstrap.min.css">
	<link rel="stylesheet" href="./style_homepage.css" type="text/css">
	<link rel="stylesheet" href="./components/component_css.css" type="text/css">
</head>

<body>
	<header>
		<!--BARRA DE NAVEGACION-->
		<footer id="MENU">
			<iframe id="frame_menu" scrolling="no"
				src="./components/menu2.php?usuario=<?= $usuario; ?>"></iframe>
		</footer><!-- FIN BARRA DE NAVEGACION-->
	</header>

	<!--CONTENEDOR-->
	<!--Aqui va el carrusel y lo de articulos destacados-->
	<section>
		<div class="container-fluid contenedor1">
			<!--Codigo Carrusel-->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="./imagenes/e1.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h1>VIDEOJUEGOS</h1>
							<p>¡Reseñas, opiniones, recomendaciones y más!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="./imagenes/e2.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h1>HACKING</h1>
							<p>¡Reseñas, opiniones, recomendaciones y más!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="./imagenes/e3.jpg" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h1>COMPUTACIÓN Y TECNOLOGÍA</h1>
							<p>¡Reseñas, opiniones, recomendaciones y más!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="./imagenes/e4.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h1 style="color: black;">ESTILO DE VIDA</h1>
							<p style="color: black;">¡Consejos, opiniones, recomendaciones y más!</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--Articulos destacados-->
			<div class="row espacio-1">
				<div class="col-md-4">
					<ul class="caption-style-1">
						<li>
							<a
								href="./categoria/videojuego/articulo2.php?usuario=<?= $usuario; ?>">
								<img src="imagenes/d1.jpg" class="img-fluid" alt="Responsive">
								<div class="caption">
									<div class="blur"></div>
									<div class="caption-text">
										<h1>NINJA GAIDEN:MASTER COLLECTION</h1>
										<p>Ninja Gaiden lanzará una trilogía en un título </p>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="caption-style-1">
						<li>
							<a
								href="categoria/computación/mediatek-noticia.php?usuario=<?= $usuario; ?>">
								<img src="imagenes/mediatek-noticia.jpg" class="img-fluid" alt="Responsive">
								<div class="caption">
									<div class="blur"></div>
									<div class="caption-text">
										<h1>Último en procesadores</h1>
										<p>procesadores de 4 nanómetros de mediatek</p>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="caption-style-1">
						<li>
							<a
								href="./categoria/hacking/articulo2.php?usuario=<?= $usuario; ?>"><img
									src="imagenes/d3.jpg" class="img-fluid" alt="Responsive">
								<div class="caption">
									<div class="blur"></div>
									<div class="caption-text">
										<h1 class="text-left">COMO HACKEAR UN PERFIL DE FACEBOOK</h1>
										<p class="text-justify">Aquí vas a aprender las maneras más fáciles de hackear
											Facebook, te invito a leer estos sencillos métodos...</p>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
	</section>

	<!--SECCION "Recientes"-->
	<section>
		<div class="container container-fluidwidth: 100%" style="margin-top:1cm;">
			<h3 id="recientes">Recientes</h3>
			<!--Primer articulo-->
			<hr>
			<div class="row espacio-1">
				<div class="col-md-6">
					<h6 id="titulo_articulo">NINJA GAIDEN:MASTER COLLECTION</h6>
					<p>Koei Tecmo y Team Ninja han mostrado un nuevo tráiler de Ninja Gaiden: Master Collection dedicado
						a la acción frenética de la saga, un repaso a técnicas, armas, habilidades y situaciones a las
						que se enfrentará Ryu Hayabusa en esta colección remasterizada de la trilogía, que se pondrá a
						la venta el 10 de junio en PS4, Xbox One, Nintendo Switch y PC. </p>
					<button type="button" class="btn btn-success" id="btn_semana">Ver más</button>
				</div>
				<div class="col-md-6">
					<img src="./imagenes/d1.jpg" class="img-fluid" alt="img-thumbnail">
				</div>
			</div>
			<!--Fin de primer articulo-->
			<!--Segundo articulo-->
			<!--Segundo articulo-->
			<hr>
			<div class="row espacio-1">
				<div class="col-md-6">
					<h6 id="titulo_articulo">Último en procesadores</h6>
					<p>
						MediaTek podría ser la primera en presentar un procesador construido a escala de 4 nanómetros.
						Pero para ver esto en dispositivos móviles tendremos que esperar hasta principios del año que
						viene.
						Los procesadores móviles no han dejado de evolucionar a lo largo de los años. En la actualidad
						nos encontramos con procesadores cuya potencia y eficiencia energética dejan en evidencia a
						aquellos de hace cinco años. Todo esto gracias a la carrera por construir procesadores con una
						litografía que permite que los transistores que los componen sean minúsculos.
					</p>
					<a
						href="./categoria/computación/mediatek-noticia.php?usuario=<?= $usuario; ?>">
						<button type="button" class="btn btn-success" id="btn_semana">Ver más</button>
					</a>
				</div>
				<div class="col-md-6">
					<img src="./imagenes/mediatek-noticia.jpg" class="img-fluid" alt="img-thumbnail">
				</div>
			</div>
			<!--Fin de segundo articulo-->
			<!--Tercero articulo-->
			<hr>
			<div class="row espacio-1">
				<div class="col-md-6">
					<h6 id="titulo_articulo">¿Es posible hackear humanos? La Ingeniería social</h6>
					<p class="text-justify">No, no estamos hablando de Hackear sus cuentas o su ordenador mediante la
						implantación de códigos complejos. Estamos hablando de Hackear su forma de pensar, hackear su
						cabeza, hackear a un ser humano.
						Bien, si no lo fuera no estaría escribiendo esto por lo que demos por respondida la pregunta y
						vamos al grano. A continuación vas a aprender unos cuantos métodos que te van a ayudar a
						protegerte de la Ingeniera Social, o bien implementarla para hacer un mal uso de ella.
						Dependiendo de en que bando estés.
						Vamos a aclarar un par de puntos. Es cierto que existen muchas soluciones de seguridad
						actualmente, antivirus, anti-malwares, bloqueadores y demás que nos ayudarán a navegar con algo
						de seguridad por la red, repito “algo .”
						Ahora dejemos de ser infantiles por un momento y llamemos a las cosas por su nombre.
						La línea que separa a un hacker o un estafador experimentado de tus credenciales es francamente
						pequeña y por muchos métodos de seguridad que implantes el único que puede protegerte eres tú.
						De poco te servirá un antivirus si te estafan con Ingeniería Social.</p>
					<button type="button" class="btn btn-success" id="btn_semana">Ver más</button>
				</div>
				<div class="col-md-6">
					<img src="./imagenes/ingSoc.png" class="img-fluid" alt="img-thumbnail">
				</div>
			</div>
			<!--Fin de Tercero articulo-->
		</div>
	</section>

	<!--Seccion "ARTICULO DE LA SEMANA"-->
	<section>
		<hr>
		<div class="container-fluid contenedor1" id="con_semana">
			<h3 class="title_semana">Artículo de la Semana</h3>
			<!--Primer articulo-->
			<hr>
			<div class="row espacio-1">
				<div class="col-md-7" id="img_semana">
					<img src="./categoria/imagenes/stylelife_img/desk.jpg" class="img-fluid" alt="img-thumbnail">
				</div>

				<div class="col-md-3 align-self-center" style="margin-right: 5em;">
					<h6 class="title_semana">Las Mejores Apps para Tomar Notas en Android</h6>
					<p id="p_semana">Te presentamos las mejores apps para Android para tomar notas y listas de tareas.
						<br>¡Exprime esa productividad al máximo!
					</p>
					<a href="./categoria/articulo1_stylife.php?usuario=<?= $usuario; ?>"
						target="_parent">
						<button type="button" class="btn btn-success" id="btn_semana">Ver más</button></a>

				</div>
			</div>
	</section>

	<!--JQuery-->
	<script src="./plantilla-bp/js/jquery-3.5.0.min.js"></script>
	<script src="./plantilla-bp/js/popper.min.js"></script>
	<script src="./plantilla-bp/js/bootstrap.min.js"></script>
</body>

<footer id="MENU">
	<!-- por cada nivel de carpetas poner " ../ " -->
	<iframe id="frame_info" scrolling="no" src="./components/info.html"></iframe>
</footer>

</html>