<?php
  if (!empty($_GET['usuario'])) {
      $usuario=$_GET['usuario'];
  } else {
      $usuario="sin_usuario";
  }
?>
<html>

<head>
    <title>
        Canales Recomendados de Youtube sobre Finanzas Personales y Productividad
    </title>
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
    <link rel="stylesheet" href="./style_stylelife.css" type="text/css">
    <link rel="stylesheet" href="../style_homepage.css" type="text/css">
    <link rel="stylesheet" href="../../components/component_css.css" type="text/css">
    <link rel="stylesheet" href="../../components/comments.css" type="text/css">
</head>

<body id="fondo">

    <head>
        <!--BARRA DE NAVEGACION-->
        <footer id="MENU">
            <iframe id="frame_menu" scrolling="no"
                src="../../components/menu2.php?usuario=<?= $usuario; ?>"></iframe>
        </footer>
        <!-- FIN BARRA DE NAVEGACION-->
    </head>

    <section>
        <div class="container container-fluidwidth: 100% fondo-blanco">
            <br>
            <h2 class="titulos">Canales Recomendados de Youtube sobre Finanzas Personales y Productividad</h2>
            <img src="../imagenes/stylelife_img/youtube-1684601_1280.png" class="img-fluid" alt="img-thumbnail">
            <br>
            <iframe id="frame_likes" scrolling="yes" style="height: 8%; width: 60%;"
            src="../../components/likesframe.php?idArticulo=3 & username=<?= $usuario; ?>"></iframe>
            <hr>
            <p>Si estas interesado en mejorar tu Productividad, conocer herramientas y consejos para lograrlo, y además
                saber como
                manejar mejor tus Finanzas Personales, sin duda los siguientes canales de Youtube te ayudarán pues
                contienen información muy útil
                y buenas explicaciones.
                <br><br>Están completamente en español. Es una pena que no sean tan conocidos porque son excelentes.
            </p>
            <h4 class="titulos">Eduardo Rosas - Finanzas Personales</h4>
            <div>
                <img src="../imagenes/stylelife_img/eduardo.jpg" class="img-fluid" alt="img-thumbnail">
            </div>
            <div>
                <p><br>Este canal de Youtube se especializa en enseñarte como invertir y en donde hacerlo: te muestra
                    las diferentes plataformas, consejos
                    y tambien el autor tiene un curso sobre Finanzas Personales. Habla también sobre ahorro,
                    procrastinación y más.
                    <br> Aquí te dejo el enlace: <a href="https://www.youtube.com/channel/UCBxr1muciHdRtlygUhruARw"
                        target="_blank">Click aquí</a>
                <h5 class="texto_importante">¡Sin duda te encantará!</h5>
                <hr>
                <h4 class="titulos">Lucía Jiménez Vida</h4>
                <div>
                    <img src="../imagenes/stylelife_img/lucia.jpg" class="img-fluid" alt="img-thumbnail">
                </div>
                <div>
                    <br>
                    <p>Este canal se especializa en brindarte consejos sobre que herramientas digitales puedes usar para
                        aumentar tu Productividad,
                        combatir la procrastinación, como vencer malos hábitos y crear buenos, como crear tu rutina
                        matinal, recomendaciones de Libros
                        acerca de estos temas y la experiencia de la youtuber en su camino al emprendimiento y como
                        puedes comenzar el tuyo.
                        <br><br> Yo aprendí mucho en su canal, ¡SUPER RECOMENDADO!
                        <br>Visita su canal en este <a href="https://www.youtube.com/channel/UCBaluTsy_96bEFwl1NWogZA"
                            target="_blank">enlace</a>

                    <h4 class="titulos">Carlos Reyes - Estudio y Productividad</h4>
                    <div>
                        <img src="../imagenes/stylelife_img/carlos.jpg" class="img-fluid" alt="img-thumbnail">
                        <br>
                        <br>
                        <p>Este canal se enfoca princi en la Productividad hacia el estudio.
                            <br>Da tips y consejos muy buenos acerca de como ser mejor estudiante, plataformas digitales
                            que pueden ayudarte a organizar
                            tus estudios y notas, técnicas de estudio y más consejos sobre como mejorar los aspectos
                            externos que envuelven el estudio.

                            <br><br> Gracias a su canal, tuve conocimiento acerca de mejores maneras de interactuar con
                            mis estudios y organizarme.
                            <br>¡Super Recomendado!
                            <br>Visita su canal en este <a
                                href="https://www.youtube.com/channel/UCSHFaebVKe3BjSwkwtei0jw"
                                target="_blank">enlace</a>
                        </p>

                    </div>
                    <h2 class="texto_importante">No esperes más y sin duda dales una oportunidad</h2>
                    <br>
                </div>
    </section>
    <section>
        <!-- por cada nivel de carpetas poner " ../ " -->
        <iframe id="frame_comments" scrolling="yes"
            src="../../components/commentsbox.php?idArticulo=3 & username=<?= $usuario; ?>"></iframe>
    </section>
</body>
<footer id="MENU">
    <!-- por cada nivel de carpetas poner " ../ " -->
    <iframe id="frame_info" scrolling="no" src="../../components/info.html"></iframe>
</footer>

</html>