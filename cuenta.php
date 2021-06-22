<?php
include_once './components/basedatos.php';
$BD = new BaseDatos();

if (!empty($_GET['usuario'])) {
    $usuario = $_GET['usuario'];
    $id_user;
    $tipo_user;

    $consulta = $BD->consulta($usuario);

    //saco el id del usuario
    while ($registro = $consulta->fetch_assoc()) {
        if ($registro['nombre'] == $usuario) {
            $id_user = $registro['id'];
            $tipo_user = $registro['tipo'];
        }
    }
} else {
    $usuario = "sin_usuario";
}

if (!empty($_GET['idArticulo'])) {
    $BD->borrar_artFavorito($id_user, $_GET['idArticulo']);
}
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>Perfil de <?=$usuario?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
$consulta = $BD->consulta_favoritos($id_user);
while ($registro = $consulta->fetch_assoc()) {
    //con los ids de los articulo busco su nombre y los imprimo
    echo "<div class=\"container divElemento\">";
    if (!empty($registro)) {
        $consulta2 = $BD->consulta_todoDeArticulos($registro['idArticulo']);
        while ($registro2 = $consulta2->fetch_assoc()) {
            ?>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Número de Articulo: <?=$registro2['id']?></h5>
                                    <a class="quitar_hiper"
                                        href="<?=utf8_encode($registro2['direccion']);?>?usuario=<?=$usuario;?>">
                                        <h3>
                                            <?=utf8_encode($registro2['titulo']);?>
                                        </h3>
                                    </a>
                                    <p>
                                        <?=$registro2['likes']?>
                                        likes
                                    </p>
                                    <p>
                                        Direccion: <a href="<?=utf8_encode($registro2['direccion']);?>"
                                            class="quitar_hiper">http://127.0.0.1/<?=utf8_encode($registro2['direccion']);?></a>
                                    </p>
                                    <br>
                                </div>
                                <div class="center">
                                    <form action="./cuenta.php?usuario=<?=$usuario?>&idArticulo=<?=$registro2['id']?>"
                                        method="POST">
                                        <input class="quitar_hiper" type="submit" value="Eliminar de Favoritos">
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <?php
}
    }
    echo "</div>";
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