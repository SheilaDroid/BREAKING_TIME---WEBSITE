<?php
  include_once("basedatos.php");
   $con=new BaseDatos();
    //Esto es para hacer la alta de los comentarios
    if (array_key_exists("button1", $_REQUEST)) {
        
    }
    if (array_key_exists("button2", $_REQUEST)) {
        $idborrarcm=$_REQUEST['id_cm'];
        $con->borrar_comentario($idborrarcm);
    }
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
            <?php
            //carga el numero de likes
            include_once('basedatos.php');
            $bd = new BaseDatos();
            $bd->consulta_nolikes($_REQUEST['idArticulo']);
            ?>
            <input class="btn btn-primary" type="submit" value="Me gusta este artículo" name="button1" id="likes-css">
        </div>
    </form>
</body>

</html>