<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./component_css.css" type="text/css">
</head>
<body>
	<footer >
		<!--Barra de Navegación-->
		<nav class="navbar navbar-expand-lg up ">
	      <div class="container-fluid d-flex justify-content-evenly navega">
	        <a class="navbar-brand" href="#">
	          <img src="./imagenes/coffee-time.png" width="50" height="50" alt="">
	        </a>
	        <a class="navbar-brand letrasNav" target="_parent" id="principal" href="../index.html">BREAKING TIME</a>
	        <!--Elementos de la navbar-->
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	          <ul class="navbar-nav mr-auto">
	            <li class="nav-item">
	              <a class="nav-link letrasNav" href="../categoria/videojuegos.html" target="_parent">Videojuegos</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link letrasNav" href="../categoria/hacking.html" target="_parent">Hacking</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link letrasNav" href="../categoria/computacion.html" target="_parent">Computación</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link letrasNav" href="../categoria/stylelife.html" target="_parent">Estilo de Vida</a>
	            </li>
	          </ul>
	        </div>
	        <!--Buscador-->
	        <form class="form-inline buscador d-flex">
	          <input class="form-control me-2 " type="search" placeholder="Buscar..." aria-label="Search">
	          <button class="btn btn-info" type="submit">Buscar</button>
	        </form>
	        <ul class="quitar_viñeta">
	        </ul>
	        <?php 
	        	if(!empty($_GET['usuario'])){
	        			$usuario=$_GET['usuario'];
	        		?>
	        	<a href="../login.html" target="_parent"><button ><?php echo $usuario ?></button></a><?php  
	        	}else{
	        		?>
	        	<a href="../login.html" target="_parent"><button >Inicio Sesion</button></a>
	        	<?php
	        	}
	        ?>
	    </nav>
	</footer>
</body>
</html>
