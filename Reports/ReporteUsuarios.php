<?php
include_once '../components/basedatos.php';
include_once("./TCPDF/tcpdf.php");

$bd= new BaseDatos();
$GLOBALS['consulta'] = $bd->reporteUsuarios();
?>
<?php
if(!empty($_GET['usuario'])){
    $usuario=$_GET['usuario'];
}else{
    $usuario="sin_usuario";
}

	$autores = "Alejandre Reyes Sheila Araceli, Alvarez Ordoñez Marco Antonio, Rivera Torres José Antonio, Valentín Castro Edgar Geraredo.";

	$tabla = "<thead><tr><th>ID</th>
	<th>NOMBRE</th>
	<th>Correo</th>
	<th>SEXO</th>
	<th>TIPO</th>
	</tr></thead>
	<tbody>";
	$cambioColor = "1";

	while ($registro = $GLOBALS['consulta']->fetch_assoc()) {
		$tabla .= "<tr class=\"tr".$cambioColor."\">
		<td>".$registro['id']."</td>
		<td>".$registro['nombre']."</td>
		<td>".$registro['correo']."</td>
		<td>".$registro['sexo']."</td>
		<td>".$registro['tipo']."</td>
		</tr>";
		if($cambioColor == "1"){
			$cambioColor = "2";
		}else{
			$cambioColor = "1";
		}
	}

	$tabla .= "</tbody>";
	if(array_key_exists("guardarPdfBtn",$_REQUEST)){
		$html ="
		<style>
			th{
				background-color: rgb(59, 128, 255);
			}
			.tr1{
				background-color: rgb(175, 255, 255);
			}
			.tr2{
				background-color: rgb(175, 212, 255);
			}
			td{
				text-align: center;
			}
		</style>
		<table cellspacing=\"0\" cellpadding=\"5\" border=\"1\">".$tabla."</table>";
		$objetoPDF = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		ob_end_clean();
		$objetoPDF->SetCreator(PDF_CREATOR);
		$objetoPDF->SetAuthor($autores);
		$objetoPDF->SetTitle('Breaking Time Reportes');
		$objetoPDF->SetSubject('Reporte de Usuarios');
		$objetoPDF->SetHeaderData("coffee-time.png",10,"Breaking-Time",'Reporte de Usuarios', array(0,0,0));
		$objetoPDF->setFooterData(array(0,0,0), array(0,128,0));
		$objetoPDF->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$objetoPDF->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$objetoPDF->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		$objetoPDF->SetMargins(20, 20, 20);
		$objetoPDF->SetHeaderMargin(PDF_MARGIN_HEADER);
		$objetoPDF->SetFooterMargin(PDF_MARGIN_FOOTER);
		$objetoPDF->SetFont('times', 'N', 14);
		
		$objetoPDF->AddPage();

		$objetoPDF->writeHTML($html, true, false, false, false, '');

		$objetoPDF->Output('Reporte_Usuarios.pdf','I');
	}

?>
<html>

<head>
    <!-- PONER AQUI EL NOMBRE DE LA CATEGORIA-->
    <title>Reporte usuarios</title>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
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
    <!--hoja del css-->
    <link rel="stylesheet" href="../components/component_css.css" type="text/css">
    <!--link rel="stylesheet" href="../plantilla-bp/categoria/css/stylehacking.css" type="text/css"-->

</head>

<body class="principal">

    <head>
        <!--BARRA DE NAVEGACION-->
        <footer id="MENU">
            <iframe id="frame_menu" scrolling="no" src="../components/menu2.php?usuario=<?= $usuario; ?>"></iframe>
        </footer>

        <!-- FIN BARRA DE NAVEGACION-->
    </head>

    <!--Tabla de reportes -->
    <div class="container">
		<div class="col mt-5">
			<form action="?usuario=<?= $usuario?>" method="POST">
				<input type="submit" value="Guardar como PDF" name="guardarPdfBtn">
			</form>
		</div>
        <div class="row justify-content-center">
            <div class="col-auto">
			<h1 class="text-center ">Reporte de usuarios</h1></th></tr>
				<div class="mt-5">
					<table class="table table-Info table-striped table-hove mx-auto d-block">
						<?php
							echo $tabla;
						?>
					</table>
				</div>
            </div>
        </div>
    </div>

	<footer id="MENU">
		<!-- por cada nivel de carpetas poner " ../ " -->
		<iframe id="frame_info" scrolling="no" src="../components/info.html"></iframe>
	</footer>
</body>
</html>