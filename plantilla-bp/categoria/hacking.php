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
	<title>Hacking</title>
	<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
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
	<link rel="stylesheet" href="./css/stylehacking.css" type="text/css">

</head>

<body class="principal">

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
			<img src="./imagenes/bannerH.jpg" class="img-fluid" alt="...">
		</nav>

	</section>
	<section class="fondo1">
		<nav>
			<div class="nose">
				<pre><h2 class="texto_destacados text-center">ARTICULOS DESTACADOS</h2></pre>
				<figure class="figure">
					<!--imagen destacado 1-->
					<a href=""><img src="./imagenes/articuloH4.jpg"
							class="figure-img img-fluid rounded dimensiones_imagen1_destacado" alt="..."></a>
				</figure>
				<figure class="figure">
					<!--imagen destacado 2-->
					<a href=""><img src="./imagenes/articuloH5.jpg"
							class="figure-img img-fluid rounded dimensiones_imagen2_destacado d-flex justify-content-between"
							alt="..."></a>
				</figure>
				<figure class="figure">
					<!--imagen destacado 3-->
					<a href=""><img src="./imagenes/articuloH1.jpg"
							class="figure-img img-fluid rounded dimensiones_imagen3_destacado d-flex justify-content-between"
							alt="..."></a>
				</figure>
			</div>
		</nav><br>
	</section>
	<section class="fondo2">
		<br>
		<h2 class="d-flex justify-content-center text-white">ARTICULOS</h2><br>
		<div>
			<div class="container">
				<div class="row gx-5 d-flex justify-content-evenly">
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 1,1-->
							<a href="./hacking/articulo1.php?usuario=<?= $usuario; ?>"><img src="./imagenes/articuloH1.jpg" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="./hacking/articulo1.php?usuario=<?= $usuario; ?>" class="quitar_efecto_link">
									<h5 class="card-title">??C??MO HACKEAR TIKTOK?</h5>
								</a>
								<p class="card-text">Tik tok es una red social que consiste en compartir videos en l??nea, en el 2020 ha conseguido reunir millones de usuarios para esta plataforma, por ello te mostraremos las diferente formas de hackear una cuenta de Tik Tok.</p><a href="./hacking/articulo1.html" class="quitar_efecto_link">Leer
									mas..</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 1,2-->
							<a href="./hacking/articulo2.php?usuario=<?= $usuario; ?>"><img src="./imagenes/articuloH2.jpg" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="./hacking/articulo2.php?usuario=<?= $usuario; ?>" class="quitar_efecto_link">
									<h5 class="card-title">COMO HACKEAR UN PERFIL DE FACEBOOK</h5>
								</a>
								<p class="card-text">Aqu?? vas a aprender las maneras m??s f??ciles de hackear Facebook, te invito a leer estos sencillos m??todos que tambi??n sirven para evitar que te puedan hackear Twitter, gmail o cualquier otra red social.</p><a href="./hacking/articulo2.html"
									class="quitar_efecto_link">Leer mas..</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 1,3-->
							<a href="#"><img src="./imagenes/articuloH3.1.jpg" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="#" class="quitar_efecto_link">
									<h5 class="card-title">??QU?? ES UN XPLOITZ Y COMO SE UTILIZA?</h5>
								</a>
								<p class="card-text">Primero que todo hay un par de puntos que aclarar, un Exploit no es lo mismo que un Xploitz. El primero es un programa inform??tico o un comando que provoca comportamientos imprevistos en un software/hardware.</p><a href="" class="quitar_efecto_link">Leer
									mas..</a>
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
							<a href="#"><img src="./imagenes/articuloH4.jpg" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="#" class="quitar_efecto_link">
									<h5 class="card-title">HACKEAR CONTRASE??AS ALMACENADAS</h5>
								</a>
								<p class="card-text">Una de las maneras m??s f??ciles de conseguir hackear contrase??as o credenciales de cuentas de correos electr??nicos, de cuentas de facebook, instagram y un largu??simo etc??tera es mediante el uso de contrase??as almacenadas.</p><a href="" class="quitar_efecto_link">Leer
									mas..</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 2,2-->
							<a href="#"><img src="./imagenes/articuloH5.jpg" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="#" class="quitar_efecto_link">
									<h5 class="card-title">COMO CREAR UN KEYLOGGER</h5>
								</a>
								<p class="card-text">El Keylogger es un software de malware muy utilizado en el mundo del Hack. Este malware nos permite registrar todo el contenido introducido en el teclado de la persona que utilice el dispositivo.</p><a href="" class="quitar_efecto_link">Leer
									mas..</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card pre-card marco">
							<!--imagen articulo 2,3-->
							<a href="#"><img src="./imagenes/articuloH6.jpg" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<a href="#" class="quitar_efecto_link">
									<h5 class="card-title">COMO HACKEAR UNA CUENTA DE TWITTER</h5>
								</a>
								<p class="card-text">??ltimamente la red social Twitter se ha visto envuelta en m??ltiples casos de Hackeo a cuentas de sus usuarios, incluso a la misma red de twitter, con el hackeo masivo a cuentas de personajes famosos.</p><a href="" class="quitar_efecto_link">Leer
									mas..</a>
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