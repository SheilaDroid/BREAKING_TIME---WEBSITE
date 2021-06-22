<!DOCTYPE html>
<html lang="en">
<!--	https://www.xataka.com.mx/ordenadores/nuevo-imac-m1-precio-fecha-lanzamiento-oficial-mexico	-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BreakingTime - Nuevas iMac</title>

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
	<link rel="stylesheet" href="../../components/component_css.css" type="text/css">
	<link rel="stylesheet" href="../../components/comments.css" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="../formato.css" type="text/css">
	<link rel="stylesheet" href="../../style_homepage.css" type="text/css">
</head>

<body>
	<?php
		if(!empty($_GET['usuario'])){
			$usuario=$_GET['usuario'];
		}else{
			$usuario="sin_usuario";
		}
	?>
	<header>
		<!--BARRA DE NAVEGACION-->
		<footer id="MENU">
			<iframe id="frame_menu" scrolling="no" style="height: 60px;"
				src="../../components/menu2.php?usuario=<?= $usuario; ?>"></iframe>
		</footer><!-- FIN BARRA DE NAVEGACION-->
	</header>
	
	<!--	Noticia	-->
	<section name="noticia">
		<div class="noticiaDiv">
			<h1 class="titulos">Nuevo iMac con M1, precio y fecha de lanzamiento oficial en México</h1>
			<img class="imgPortada" style="padding-left: 1%; padding-right: 1%;" src="../imagenes/iMac-noticia.jpg">
			
			<iframe id="frame_likes" scrolling="yes" style="height: 50px; width: 60%; margin-left: 1%;"
            src="../../components/likesframe.php?idArticulo=12 & username=<?= $usuario; ?>"></iframe>
	
			<div id="datosPublicación">
				<div id="autorLabel">
					Gerardo Valentín
				</div>
				<div id="fechaLabel">
					22/04/2021
				</div>
			</div>

			<div>
				<p style="margin-left: 3%; margin-right: 30%;">
					Una de las sorpresas del evento de Apple el día de hoy fue la presentación del nuevo iMac con M1.
					Apple por fin está renovando su computadora de escritorio con sus nuevos chips basados en
					arquitectura ARM. Como era lógico, también llegará a México y estos son sus precios:
					<br>
				<ul style="margin-left: 10%; margin-right: 30%;">
					<li>iMac M1 con CPU de 8 núcleos, GPU de 7 núcleos y 256GB de almacenamiento por 33,499 pesos</li>
					<li>iMac M1 con CPU de 8 núcleos, GPU de 8 núcleos y 256GB de almacenamiento por 38,499 pesos</li>
					<li>iMac M1 con CPU de 8 núcleos, GPU de 8 núcleos y 512GB de almacenamiento por 43,999 pesos</li>
				</ul>

				<img class="imgPortada" style="padding-left: 3%; padding-right: 30%;"
					src="../imagenes/imac-colores.jpg">
				<br><br>
				</p>

				<p style="margin-left: 3%; margin-right: 30%;">
					Todas las versiones comparten el mismo diseño, pero no todas las características. Por ejemplo, el
					modelo
					más barato cuenta con Magic Keyboard sin TouchID, y los más caros tienen el famoso puerto Ethernet
					en el
					cargador además de que gozan de puerdos adicionales como USB 3.
					<br><br>
					Curioso que desde la versión básica a la más cara, todas tienen 8GB de memoria RAM, aunque suponemos
					que
					cuando se puedan adquirir se podrá realizar añadir más memoria.
					<br><br>
					<!--	
				<iframe width="855" height="481" src="https://www.youtube.com/embed/Wg5g0q-Y310"
					title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
					-->
					<br>
				</p>

				<h3 style="margin-left: 3%; margin-right: 30%;">
					Lanzamiento en México
				</h3>
				<p style="margin-left: 3%; margin-right: 30%;">
					No hay fecha de lanzamiento para México, pero el que ya estén listadas en la página oficial de Apple
					significa que se podrán a la venta en fechas cercanas a su disponibilidad en otros países. En los
					EUA se podrán comprar a partir del 30 de abril.
					<br><br>

					<img class="imgPortada" style="margin-bottom: 5%;" src="../imagenes/imac-caracteristicas.jpg"
						alt="">
				</p>
			</div>
		</div>
		<iframe id="frame_comments" scrolling="yes" src="../../components/commentsbox.php?idArticulo=12 & username=<?= $usuario; ?>"></iframe>
	</section>

	<section>
		<h2>Continúa leyendo nuestros artículos destacados:</h2>
		<!--Articulos destacados-->
		<div class="row espacio-1">
			<div class="col-md-4">
				<ul class="caption-style-1">
					<li><a href="mediatek-noticia.php?usuario=<?= $usuario; ?>">
							<img src="../imagenes/mediatek-noticia.jpg" class="img-fluid" alt="Responsive">
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
						<a href="imac-noticia.php?usuario=<?= $usuario; ?>">
							<img src="../imagenes/iMac-noticia.jpg" class="img-fluid" alt="Responsive">
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h1>Nueas iMac</h1>
									<p>Estos son los iMac con Apple M1,<br>una explosión de color</p>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="caption-style-1">
					<li>
						<a href="padron-noticia.php?usuario=<?= $usuario; ?>">
							<img src="../imagenes/padron-noticia.jpg" class="img-fluid" alt="Responsive">
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h1>Padrón de telefonía móvil en México</h1>
									<p>Las grandes dudas que provoca el registro<br> obligatorio que requiere
										tus datos biométricos</p>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!--	Fin Noticia	-->

	<footer id="MENU">
		<!-- por cada nivel de carpetas poner " ../ " -->
		<iframe id="frame_info" scrolling="no" src="../../components/info.html"></iframe>
	</footer>
</body>

</html>