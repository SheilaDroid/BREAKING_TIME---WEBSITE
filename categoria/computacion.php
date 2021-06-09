<html>
<head>
	<!-- PONER AQUI EL NOMBRE DE LA CATEGORIA-->
	<title>Computación y Tecnología</title>
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
	<link rel="stylesheet" href="../components/component_css.css" type="text/css">
	<link rel="stylesheet" href="./formato.css" type="text/css">
	<link rel="stylesheet" href="../style_homepage.css" type="text/css">
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
			<iframe id="frame_menu" scrolling="no"
				src="../components/menu2.php?usuario=<?= $usuario; ?>"></iframe>
		</footer><!-- FIN BARRA DE NAVEGACION-->
	</header>
	
	<section>
		<!--imagen principal -->
		<nav class="text-center">
			<img src="./imagenes/portada-computacion.jpg" class="img-fluid dimensiones_imagen" alt="...">
		</nav>
	</section>

	<section class="fondo1">
		<nav>
			<div class="nose">
				<pre><h2 class="texto_destacados">  DESTACADOS</h2></pre>
				<figure class="figure">
					<!--imagen destacado 1-->
					<a href="computación/mediatek-noticia.php?usuario=<?= $usuario; ?>"><img src="./imagenes/mediatek-noticia.jpg"
							class="figure-img img-fluid rounded dimensiones_imagen1_destacado" alt="..."></a>
				</figure>
				<figure class="figure">
					<!--imagen destacado 2-->
					<a href="computación/imac-noticia.php?usuario=<?= $usuario; ?>"><img src="./imagenes/iMac-noticia.jpg"
							class="figure-img img-fluid rounded dimensiones_imagen2_destacado d-flex justify-content-between"
							alt="..."></a>
				</figure>
				<figure class="figure">
					<!--imagen destacado 3-->
					<a href="computación/padron-noticia.php?usuario=<?= $usuario; ?>"><img src="./imagenes/padron-noticia.jpg"
							class="figure-img img-fluid rounded dimensiones_imagen3_destacado d-flex justify-content-between"
							alt="..."></a>
				</figure>
			</div>
		</nav><br>
	</section>
	<section class="fondo2">
		<br>
		<h2 class="d-flex justify-content-center">Todos los Articulos</h2><br>
		<div>
			<div class="container">
				<div class="row gx-5 d-flex justify-content-evenly">
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 1,1-->
							<!--	https://computerhoy.com/noticias/tecnologia/procesadores-4-nanometros-estarian-cerca-llegarian-mano-mediatek-851257	-->
							<a href="computación/mediatek-noticia.php?usuario=<?= $usuario; ?>"><img src="./imagenes/mediatek-noticia.jpg"
									class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="computación/mediatek-noticia.php?usuario=<?= $usuario; ?>" class="quitar_efecto_link">
									<h5 class="card-title">Último en procesadores</h5>
								</a>
								<p class="card-text">Los procesadores de 4 nanómetros estarían más cerca y llegarían de
									la mano de MediaTek </p><a href="computación/mediatek-noticia.html"
									class="quitar_efecto_link">Leer
									mas..</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 1,2-->
							<!--	https://computerhoy.com/noticias/tecnologia/microsoft-va-arreglar-fin-terrible-app-store-windows-10-851277	-->
							<a href="#"><img src="./imagenes/windowsstore-noticia.jpg"
									class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="#" class="quitar_efecto_link">
									<h5 class="card-title">Cambios en la store de windows</h5>
								</a>
								<p class="card-text">Microsoft va a arreglar por fin su terrible App Store de Windows 10
								</p><a href="#" class="quitar_efecto_link">Leer
									mas..</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 1,3-->
							<!--	https://www.xataka.com.mx/ordenadores/nuevo-imac-m1-precio-fecha-lanzamiento-oficial-mexico	-->
							<a href="./computación/imac-noticia.php?usuario=<?= $usuario; ?>"><img src="./imagenes/iMac-noticia.jpg" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="./computación/imac-noticia.php?usuario=<?= $usuario; ?>" class="quitar_efecto_link">
									<h5 class="card-title">Nuevas iMac</h5>
								</a>
								<p class="card-text">Estos son los iMac con Apple M1, una explosión de color</p>
								<a href="./computación/imac-noticia.php?usuario=<?= $usuario; ?>" class="quitar_efecto_link">Leer mas..</a>
							</div>
						</div>
					</div>
				</div><br>
			</div>
			<div class="container">
				<div class="row gx-5 align-items-start">
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 2,1-->
							<!--	https://www.bbc.com/mundo/noticias-america-latina-56813026	-->
							<a href="./computación/padron-noticia.php?usuario=<?= $usuario; ?>"><img src="./imagenes/padron-noticia.jpg" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="./computación/padron-noticia.php?usuario=<?= $usuario; ?>" class="quitar_efecto_link">
									<h5 class="card-title">Padrón de telefonía móvil en México</h5>
								</a>
								<p class="card-text">Las grandes dudas que provoca el registro obligatorio que requiere
									tus datos biométricos</p><a href="./computación/padron-noticia.php?usuario=<?= $usuario; ?>" class="quitar_efecto_link">Leer
									mas..</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 2,2-->
							<!--	https://isamarcial.com.mx/2021/04/16/esto-no-es-polvo-son-los-nuevos-capacitores-de-alta-tecnologia-hechos-por-samsung/	-->
							<a href=""><img src="./imagenes/capacitores-noticia.jpg" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="" class="quitar_efecto_link">
									<h5 class="card-title">Nuevos capacitores</h5>
								</a>
								<p class="card-text">Capacitores de alta capacidad ultra pequeños</p><a href=""
									class="quitar_efecto_link">Leer
									mas..</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 2,3-->
							<!--	https://diarioti.com/nvidia-y-sus-socios-colaboran-en-la-computacion-de-arm-para-cargas-de-trabajo-de-cloud-hpc-edge-y-pc/116239	-->
							<a href=""><img src="./imagenes/nvidia-noticia.jpg" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="" class="quitar_efecto_link">
									<h5 class="card-title">NVIDIA colabora con ARM</h5>
								</a>
								<p class="card-text">NVIDIA y sus Socios Colaboran en la Computación de Arm para Cargas
									de Trabajo de Cloud, HPC, Edge y PC </p><a href="" class="quitar_efecto_link">Leer
									mas..</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br>
	</section>

	<footer id="MENU">
		<iframe id="frame_info" scrolling="no" src="../components/info.html"></iframe>
	</footer>
</body>

</html>