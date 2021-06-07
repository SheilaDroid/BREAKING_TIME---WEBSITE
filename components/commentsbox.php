<?php
include_once('basedatos.php');
$bd= new BaseDatos();
$GLOBALS['consulta'] = $bd -> mostrar_comentarios(1);
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
</head>


<body>
  <form method="POST" >
    <div class="container">
      <h3>¿Te gustó este artículo? ¡Dejanos tu comentario!</h3>
      <div class="mb-3">
        <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
      </div>
      <input class="btn btn-primary boton2" type="submit" value="Guardar" name="button1" id="boton2">
    </div>
  </form>
  <!--AQUI VAN A APARECER LOS COMENTARIOS ANTERIORES-->
  <tbody>
    <?php
                while ($registro=$consulta->fetch_assoc()) {
                    ?>

    <tr>
      <td><?php echo $registro['nombre']; ?>
      </td>
      <td><?php echo $registro['comentario']; ?>
      </td>

    </tr>
    <?php
                }?>
  </tbody>
  <!---->
  <br>
  <div class="toast grid-container" style="position: absolute; bottom: 0; right: 100;">
    <div class="toast-header">
      Aviso
    </div>
    <div class="toast-body">
      <?php
                                $frase = "¡Comentario Guardado!";
                                echo $frase;
                                ?>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <script>
    $(document).ready(function() {
      $("#boton2").click(function() {
        $('.toast').toast({
          delay: 2000
        });
        $('.toast').toast('show');
      });
    });
  </script>
</body>

</html>