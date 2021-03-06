<?php
if (!empty($_GET['usuario'])) {
    $usuario = $_GET['usuario'];
} else {
    $usuario = "sin_usuario";
}
?>
<!DOCTYPE html>
<html>

<head>
	<mera charset="UFT-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
			integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
			integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
		</script>
		<link rel="stylesheet" href="./component_css.css" type="text/css">
</head>

<body class="prueba">
	<footer class="up_info">
		<section>
			<div id="footer_color">
				<div class=" margen-arriba">
					<a>
						<h3 id="footer_title">Breaking Time</h3>
					</a>
					<div class="" id="fandom">
						<!--Primer columna: EXPLORE PROPERTIES Y FOLLOW US-->
						<div class="mover_categorias">
							<h5 id="titulos_footer">Categorías
							</h5>
							<p class="footer_lista">
								<a class="footer_lista"
									href="../categoria/videojuegos.php?usuario=<?= $usuario; ?>"
									target="_parent">Videojuegos</a><br>
								<a class="footer_lista"
									href="../categoria/hacking.php?usuario=<?= $usuario; ?> "
									target="_parent">Hacking</a><br>
								<a class="footer_lista"
									href="../categoria/computacion.php?usuario=<?= $usuario; ?>"
									target="_parent">Computación</a><br>
								<a class="footer_lista"
									href="../categoria/stylelife.php?usuario=<?= $usuario; ?>"
									target="_parent">Estilo de
									Vida</a><br>
							</p>
						</div>
						<!--Segunda columna:-->
						<div class="mover_acerca">
							<h5 id="titulos_footer">Acerca de</h5>
							<p class="footer_lista">
								<a class="footer_lista" href="./acercade.php" target="_blank">¿Qué es Breaking Time?</a><br>
							</p>
							<h5 id="titulos_footer">Follow Us
							</h5>
							<div class="margen-redes">
								<img src="./imagenes/facebook.png" class="img-fluid img_footer" alt="img-thumbnail">
								<img src="./imagenes/twitter.png" class="img-fluid img_footer" alt="img-thumbnail">
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
</body>

</html>