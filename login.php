<?php
	include_once('./components/basedatos.php');
	$BD=new BaseDatos();
	
	if(!empty($_REQUEST['usuario'])&&!empty($_REQUEST['password'])){
	echo "si entro 2";
		$GLOBALS['consulta']=$BD->consulta($_REQUEST['usuario']);
		$registro=$GLOBALS['consulta'];
		while ($registro=$GLOBALS['consulta']->fetch_assoc()) {
			if($registro['nombre']==$_REQUEST['usuario'] && $registro['password']==$_REQUEST['password']){
			echo "si entro";
			header('Location:./index.php?usuario='.$registro['nombre']);
			exit();
			}
		}
	}else{
		echo "holasda";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio Sesion</title>
	<link rel="stylesheet" href="./plantilla-bp/css/bootstrap.min.css">
	<link rel="stylesheet" href="./style_homepage.css" type="text/css">
</head>
<body class="bg-black">
	<h1 id="title">BREAKING TIME</h1>
	<section >
		<div class="form-login ">
			<form action="#" method="GET">
				<li class="quitar_viñeta">
					<br>
					<ul><input type="text" id="usuario" name="usuario" class="style-input"  placeholder="Usuario"></ul>
					<ul><input type="password" id="password" name="password" class="style-input"placeholder="*******"></ul><br><br><br>
					<ul><button type="submit" class="style-button">Iniciar Sesion</button></ul>
				</li>
			</form>
		</div>
	</section>
	<div>
		<h6 class="position-login"><a class="letras-login2" href="sign_upt.php">Registrar</a> | <a href="" class="letras-login2">Olvide mi contrase&ntilde;a</a></h6>
	</div>
</body>
</html>