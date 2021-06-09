<!DOCTYPE html>
<html lang="en">
<!--	https://www.bbc.com/mundo/noticias-america-latina-56813026	-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BreakingTime - Padrón de telefonía móvil en México</title>

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
			<iframe id="frame_menu" scrolling="no"
				src="../../components/menu2.php?usuario=<?= $usuario; ?>"></iframe>
		</footer>
		<!-- FIN BARRA DE NAVEGACION-->
	</header>
	
	<!--	Noticia	-->
	<section name="noticia">
		<div class="noticiaDiv">
			<h1 class="titulos">Padrón de telefonía móvil en México: las grandes dudas que provoca el registro
				obligatorio que requiere tus datos biométricos</h1>
			<img class="imgPortada" src="../imagenes/padron-noticia.jpg">

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
					Imagina que para conseguir una tarjeta SIM con la que usar tu celular tuvieras que permitir a la
					compañía telefónica el registro de datos tan personales como tus huellas dactilares, las facciones
					de tu rostro o el iris de tus ojos.
					<br><br>

					En México ya es una realidad, al menos oficialmente, desde el pasado sábado: ese día entró el vigor
					el decreto con el que se creó el llamado Padrón Nacional de Usuarios de Telefonía Móvil.
					<br><br>

					El ambicioso objetivo de esta base de datos es recopilar la información -incluidos los datos
					biométricos- de los propietarios de las 126 millones de líneas de telefonía que existen en el país.
					<br><br>

					La finalidad del padrón, según el gobierno, es que esta información ayude a las autoridades para
					evitar la comisión de delitos como extorsiones telefónicas o secuestros.
					<br><br>

					"Se usan estas tarjetas que eran anónimas, se cambiaban de chips y se utilizaban los teléfonos para
					cometer ilícitos", puso como ejemplo la semana pasada el presidente mexicano, Andrés Manuel López
					Obrador.
					<br><br>

					<img src="../imagenes/padron-noticia 1.jpg">

					"Entonces, nada más es tener un registro para cuidar a la población, es un asunto de seguridad",
					defendió.
					<br><br>

					Sin embargo, como era de esperar, la nueva norma provocó una multitud de protestas por considerar
					que vulnera la privacidad e incluso la seguridad de los usuarios, quienes ya han anunciado una
					lluvia de recursos judiciales para conseguir suspender la iniciativa.
					<br><br>

					De hecho, un juez dio este martes el primer revés a la iniciativa al admitir el amparo interpuesto
					por un particular y conceder una suspensión provisional a la reforma para que este usuario no se vea
					afectado, al menos de momento, por los requisitos del padrón.
					<br><br>
					<img class="imgPortada" src="../imagenes/padron-noticia 2.jpg">
				</p>
				<h3 style="margin-left: 3%; margin-right: 30%;">
					¿Qué críticas recibió el nuevo padrón?
					</h1>
					<p style="margin-left: 3%; margin-right: 30%;">
						<br><br>
						"Obligar a quienes contraten una línea telefónica a registrar sus datos biométricos con el
						gobierno
						es una grave violación a su privacidad. La última vez que se creó un padrón así en México, los
						datos
						terminaron en venta en el mercado negro", tuiteó Human Rights Watch.
						<br><br>

						La organización se refiere al intento de crear un registro similar en 2009 por el gobierno de
						Felipe
						Calderón. Solo dos años después, la iniciativa fue desmantelada después de que parte de esa base
						de
						datos se filtrara y apareciera a la venta en internet.
						<br><br>

						En marcha cancelación de teléfonos móviles en México
						Clases para prevenir extorsión en México
						<br><br>

						Cuando una información confidencial se ve vulnerada de ese modo, a veces puede protegerse con un
						rápido cambio de contraseñas o de datos del usuario, por ejemplo. Pero ahora que el padrón
						requerirá
						información biométrica la cosa es mucho más complicada, alertan expertos.
						<br><br>

						"Tu rostro, tu iris o tu huella digital no se pueden cambiar. Una vez comprometidos, esos datos
						pueden ser afectaciones severas y permanentes para toda tu vida y causar un daño irreversible si
						caen en manos de alguien", alerta Luis Fernando García, director de R3D: Red en Defensa de los
						Derechos Digitales en México.
						<br><br>
						<img class="imgPortada" style="margin-bottom: 5%;" src="../imagenes/padron-noticia 3.jpg">
					</p>
			</div>
		</div>
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