<?php
if(!empty($_REQUEST['contraseña'])&&!empty($_REQUEST['c_contraseña'])){
	if($_REQUEST['contraseña']==$_REQUEST['c_contraseña']){
		$usuario=$_REQUEST['usuario'];
		header('Location:./categoria/videojuegos.php?usuario='.$usuario);
	}else{
		echo "no funciono";
		//header('Location:index.html');
	}
}
	

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" href="./plantilla-bp/css/bootstrap.min.css">
	<link rel="stylesheet" href="./style_homepage.css" type="text/css">
</head>
<body class="bg-black">
	<h1 id="title2">BREAKING TIME</h1>
	<section >
		<div class="form-sign_up">
			<form action="#" method="GET">
				<li class="quitar_viñeta">
					<br>
					<ul><input type="text" id="usuario" name="usuario" class="style-input" placeholder="Usuario"></ul>
					<ul><input type="text" id="contraseña" name="contraseña" class="style-input"placeholder="Contraseña"></ul>
					<ul><input type="text" id="c_contraseña" name="c_contraseña" class="style-input"placeholder="Confirmar contraseña"></ul>
					<ul><input type="email" id="correo" name="correo" class="style-input"placeholder="Correo Electronico"></ul>
					<ul>
						<select id="sexo" name="sexo" class="style-input style-select">
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
						</select></ul>
					<ul><button type="submit" class="style-button" >Registrarse</button></ul>
				</li>
			</form>
			<br>
		</div>
		<div>
		<h6 class="position-sign_up"><a class="letras-login2" href="login.html">Iniciar Sesion</a> | <a href="" class="letras-login2">Olvide mi contraseña</a></h6>
	</div>
	</section>
</body>
</html>