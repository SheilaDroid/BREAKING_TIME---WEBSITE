<?php
	include("basedatos.php");
	if(!empty($_GET['usuario'])){
		$usuario=$_GET['usuario'];
	}else{
		$usuario="sin_usuario";
	}
	$bd = new BaseDatos();
	$datos = $bd->buscar_tituloArticulo($_POST['busquedaInput']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="./component_css.css" type="text/css">
	<title>Document</title>
</head>
<body>
	<header>
		<!--BARRA DE NAVEGACION-->
		<footer id="MENU">
			<iframe id="frame_menu" scrolling="no" style="height: 60px;"
				src="./menu2.php?usuario=<?= $usuario; ?>"></iframe>
		</footer>
		<!-- FIN BARRA DE NAVEGACION-->
	</header>
	<h1>Resultados de la búsqueda:</h1>
	<div class="container">
	<?php
		$registro = $datos->fetch_assoc();

		if(!empty($registro)){
			while(!empty($registro)){
				$contando = $bd->contar_favoritos($registro['id']);
				if(!empty($contando)){
					$contadorFav = $contando->fetch_assoc();
				}else{
					$contadorFav = 0;
				}
				echo "<div class=\"d-flex justify-content-between contenedorDeResultado\">
					<div>
						<h2>
							<a class=\"aResultado\" href=\".././".utf8_encode($registro['direccion'])."\">".utf8_encode($registro['titulo'])."
							</a>
						</h2>
					</div>
					<div class=\"row\">
						<div class=\"likeh4\">
							<h4>".$registro['likes']." likes</h4>
						</div>
						<div class=\"favoritosP\">
							<p>".$contadorFav['COUNT(idArticulo)']." en favoritos</p>
						</div>
					</div>
				</div>";
				echo "<br>";
				$registro = $datos->fetch_assoc();
			}
		}else{
			echo "<div><h2>No se encontraron resultados.</h2></div>";
			echo "<br>";
		}
	?>
	</div>
	<footer id="MENU">
		<!-- por cada nivel de carpetas poner " ../ " -->
		<iframe id="frame_info" scrolling="no" src="./info.php"></iframe>
	</footer>
</body>
</html>