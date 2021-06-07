<?php
    //Esto es para hacer la alta de los comentarios
    if (array_key_exists("button1", $_REQUEST)) {
        include_once("basedatos.php");
        $con=new BaseDatos();
        if ($_REQUEST['username'] == "sin_usuario") {
          //no se podra comentar si no esta registrado
          echo "<div class='alert alert-danger' role='alert'>
          Primero debes registrarte para poder comentar.
        </div>";
        } else {
            $id_usuario=$con->getIdUsuario($_REQUEST['username']);
            if ($con->guardar_comentarios(
                $id_usuario,
                $_REQUEST['idArticulo'],
                $_REQUEST['comentario'],
            )) {
             // echo "todo guardado";
            } else {
               // echo "no se pudo guardar comentario";
            }
        }
    }
?>
<?php
include_once('basedatos.php');
$bd = new BaseDatos();
$GLOBALS['consulta'] = $bd->mostrar_comentarios($_REQUEST['idArticulo']);
//imprimir todos los registros en html, se recibe en una variable
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
  <link rel="stylesheet" href="./components/comments.css" type="text/css">
</head>

<body>
  <form method="POST">
    <div class="container">
      <h3>¿Te gustó este artículo? ¡Dejanos tu comentario!</h3>
      <div class="mb-3">
        <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
      </div>
      <input type="hidden" id='tiempo_inicio' name='tiempo_inicio' value="">
      <input class="btn btn-primary boton2" type="submit" value="Guardar" name="button1" id="boton2">
    </div>
  </form>
  <!--AQUI VAN A APARECER LOS COMENTARIOS ANTERIORES-->
  <div class="container frame_comments">
    <hr>
    <h3>Comentarios Anteriores</h3>
    <hr>
    <?php
    while ($registro=$consulta->fetch_assoc()) {
        ?>
    <h5><?php echo $registro['nombre']; ?>
      :</h5>
    <p><?php echo $registro['comentario']; ?>
    </p>
    <a href="#">Borrar comentario</a>
    <hr>
    <?php
    }?>
  </div>
  <!---->
</body>

</html>