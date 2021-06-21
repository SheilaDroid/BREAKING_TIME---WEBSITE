<?php
include_once './components/basedatos.php';
$BD = new BaseDatos();
if (!empty($_GET['usuario'])) {
    $usuario = $_GET['usuario'];

    $GLOBALS['consulta'] = $BD->consulta($_REQUEST['usuario']);
    $registro = $GLOBALS['consulta'];
    $id_user;
    $tipo_user;
    //saco el id del usuario
    while ($registro = $GLOBALS['consulta']->fetch_assoc()) {
        if ($registro['nombre'] == $_REQUEST['usuario']) {
            $id_user = $registro['id'];
            $tipo_user = $registro['tipo'];
        }
    }
} else {
    $usuario = "sin_usuario";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./components/component_css.css" type="text/css">
    <link rel="stylesheet" href="./cuenta_css.css" type="text/css">
</head>

<body>

    <head>
        <!--BARRA DE NAVEGACION-->
        <footer id="MENU">
            <!-- por cada nivel de carpetas poner " ../ " -->
            <iframe id="frame_menu2" scrolling="no" src="./components/menu2.php?usuario=<?=$usuario;?>"></iframe>
        </footer>
        <!-- FIN BARRA DE NAVEGACION-->
    </head>

    <nav>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Favoritos
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body tamano">
                        <!--codigo favoritos-->
                        <?php
//con el id del usuario busco en la BD el id del articulo que este relacionado con el usuario
$GLOBALS['consulta'] = $BD->consulta_favoritos($id_user);
$registro = $GLOBALS['consulta'];
while ($registro = $GLOBALS['consulta']->fetch_assoc()) {
    //con los ids de los articulo busco su nombre y los imprimo
    if (!empty($registro)) {
        $GLOBALS['consulta_art'] = $BD->consulta_articulo($registro['id']);
        $registro2 = $GLOBALS['consulta_art'];
        ?>
                        <a href="<?php $registro2['direccion'];?>">
                            <h2><?php $registro2['titulo'];?> </h2>
                        </a><br>
                        <a class="quitar_hiper" href="./cuenta.php?usuario=<?=$usuario;?>">Eliminar</a>
                        <hr><br>
                        <?php
}
}
?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Modificar Usuario
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body tamano">
                        <!--CODIGO DE MODIFICACION-->
                    </div>
                </div>
            </div>
            <?php if ($tipo_user == "adm") {?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Ver reporte
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body tamano">
                        <!--CODIGO DE REPORTE-->
                        <form action="">
                            <div class="d-grid gap-2 col-3 mx-auto mt-5">
								<label class="text-center" for="">Reporte de usuarios</label>
                                <button onclick="location.href='Reports/ReporteUsuarios.php?usuario=<?=$usuario;?>'" class="btn btn-success mb-4" type="button">Generar reporte</button>
						
								<label class="text-center" for="">Reporte de articulos</label>
                                <button onclick="location.href='Reports/ReporteArticulos.php?usuario=<?=$usuario;?>'" class="btn btn-warning  mb-4" type="button">Generar reporte</button>

								<label class="text-center" for="">Reporte de favoritos</label>
								<button onclick="location.href='Reports/ReporteFavoritos.php?usuario=<?=$usuario;?>'" class="btn btn-primary  mb-4" type="button">Generar reporte</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </nav>
    <footer id="MENU">
        <!-- por cada nivel de carpetas poner " ../ " -->
        <iframe id="frame_info2" scrolling="no" src="./components/info.html"></iframe>
    </footer>
</body>

</html>