<?php
include_once '../components/basedatos.php';
$bd= new BaseDatos();
$GLOBALS['consulta'] = $bd->reporteFavoritos();
?>

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
	<title>Repote de favoritos</title>
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

    <!--Tabla de reportes -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto mt-5">
				<h1 class="text-center ">Reporte de favoritos</h1>
				<div class="mt-5">
					<table class="table table-Info table-striped table-hove mx-auto d-block">
						<thead>
							<tr>
								<th>ID</th>
								<th>ID USUARIO</th>
								<th>ID ARTICULO</th>
							</tr>
						</thead>
						
						<tbody>
							<?php while ($registro = $GLOBALS['consulta']->fetch_assoc()) {?>
							<tr>
								<td>
								<?php echo $registro['id']; ?>
								</td>
								<td>
									<?php echo $registro['idUsuario']; ?>
								</td>
								<td>
									<?php echo $registro['idArticulo']; ?>
								</td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
            </div>
        </div>
    </div>

</body>
<footer id="MENU"><!-- por cada nivel de carpetas poner " ../ " --> 
	<iframe id="frame_info" scrolling="no"  src="../components/info.php"></iframe>
</footer>

</html>