<!DOCTYPE html>
<html lang="en">
<!--	https://computerhoy.com/noticias/tecnologia/procesadores-4-nanometros-estarian-cerca-llegarian-mano-mediatek-851257	-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BreakingTime - Lo Último en procesadores</title>

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
			<h1 class="titulos">Procesadores de 4 nanómetros estarían más cerca y llegarían de la mano de MediaTek</h1>
			<img class="imgPortada" src="../imagenes/mediatek-noticia.jpg">

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
					MediaTek podría ser la primera en presentar un procesador construido a escala de 4 nanómetros. Pero
					para ver esto en dispositivos móviles tendremos que esperar hasta principios del año que viene.
					<br><br>
					Los procesadores móviles no han dejado de evolucionar a lo largo de los años. En la actualidad nos
					encontramos con procesadores cuya potencia y eficiencia energética dejan en evidencia a aquellos de
					hace cinco años. Todo esto gracias a la carrera por construir procesadores con una litografía que
					permite que los transistores que los componen sean minúsculos.
					<br><br>
					Estos transistores son las unidades básicas de procesamiento, se encargan de realizar los cálculos
					necesarios para que todo funcione. Están construidos a una escala muy pequeña llamada nanómetro,
					vendría siendo la millonésima parte de un milímetro. Lo que implica es que cuanto más bajo sea el
					número, estos transistores serán más pequeños y la cantidad de ellos será mayor dentro del
					procesador.
					<br><br>

					A mayor cantidad de transistores, mayor potencia bruta y mejor control energético. Todo parecen
					ventajas, pero en realidad no es así. Construir procesadores con transistores tan pequeños es una
					tarea
					compleja y a la que se enfrentan muchos fabricantes como Samsung, Huawei, Qualcomm, NVIDIA y TSMC
					entre
					otras.
					<br><br>

					<iframe width="855" height="481" src="https://www.youtube.com/embed/Wg5g0q-Y310"
						title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>

					<br><br>
					Ahora mismo nos encontramos en una situación complicada, estamos en plena crisis de chips porque
					empresas matrices como TSMC no consiguen dar abasto a la producción de procesadores. Pero entre
					todas
					estas complicaciones hay una empresa que parece haberse asegurado ser la primera en conseguir
					procesador
					de 4 nanómetros.
					<br><br>

					<img class="imgPortada" src="../imagenes/mediatek-dimensity-1200-2203991.jpg" alt="">

					<br><br>
					Esta empresa es MediaTek y según varias fuentes, habría conseguido un trato con TSMC con el cual se
					vería provista de estos procesadores. Eso sí, el coste habría sido reseñable. Los procesadores le
					costarían cerca de 80 dólares por unidad en comparación a los 35 dólares de los procesadores de 5
					nanómetros.

					<br><br>
					Aunque ya se hable de estos procesadores, habría que esperar al menos hasta el cuarto trimestre de
					este año o principios del año que viene para que empiece la producción. Todo esto significa que, en
					principio, no competiría con los terminales que montan el Snapdragon 888.

					<br><br>
					Sería interesante ver si el rendimiento consigue alcanzar de una vez por todas a los procesadores de
					Qualcomm, porque MediaTek lleva una larga lista de derrotas en cuanto a rendimiento y eficiencia
					energética. Ni si quiera sus procesadores Dimensity 1200, que tanto prometían, consiguieron el éxito
					esperado.
					<br><br>
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