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
        Mejores Apps para tomar notas
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
            <h2 class="titulos">Las Mejores App para Tomar Notas en Android</h2>
            <img src="../imagenes/stylelife_img/desk.jpg" class="img-fluid" alt="img-thumbnail">
            <br><br>
            <section>
        <iframe id="frame_likes" scrolling="yes" style="height: 8%; width: 60%;"
            src="../../components/likesframe.php?idArticulo=1 & username=<?= $usuario; ?>"></iframe>
            <!--Este style se justifica porque en los .css no agarraba los estilos y no se queria 
            perder el estilo que se tenia pensado-->
    </section>
            <hr>
            <p>Si tu eres de esas personas que como yo le encanta tomar notas, hacer listas de tareas, recordatorios...
                todo desde tu Android y
                que adem??s se sincronize con tu laptop... ??Este art??culo es para t??!
                Llevo un buen tiempo investigando varias apps de este estilo, y aqu?? te muestro las que m??s me gustaron
                y parecieron m??s utiles.
            </p>
            <h4 class="titulos">Google Keep: Menos es m??s</h4>
            <div>
                <img src="../imagenes/stylelife_img/google-keep.png" class="img-fluid" alt="img-thumbnail"
                    style="margin-left: 17em;">
            </div>
            <div>
                <p>Me encanta porque con tu cuenta de Google puedes sincronizar los datos de la app con la versi??n web.
                    Es la que m??s uso por su simpleza.
                <h5 class="texto_importante">Ventajas:</h5>
                <p><br> Vamos, que si quieres hacer una anotaci??n r??pida o una nota de voz o la foto de algo, Google
                    Keep es la mejor opci??n.</p>
                <h5 class="texto_importante">??Nisiquiera debes preocuparte por guardarlas, ya que lo hacen solas!</h5>
                </p>
                <br>
                <p>Entre sus cualidades est??n:</p>
                <ul>
                    <li>Uso de etiquetas</li>
                    <li>Recordarios</li>
                    <li>Widgets</li>
                    <li>Notas de colores</li>
                    <li>Poder crear notas de voz, agregar casillas de verificaci??n, agregar im??genes</li>
                    <li>Compartir tus notas</li>
                </ul>
                <br>
                <p class="parrafos">Vamos, que puedes tener tu lista de la compra ah?? y la puedes compartirla con tu
                    pareja o quien quieras.
                    <br>Y como se esperaba por ser de Google es gratis.<br>
                </p>
                <h5 class="texto_importante">Desventajas:</h5>
                <p>Lo que no me gusta es que no puedes combinar por ejemplo las casillas de verificaci??n con texto
                    normal y tampoco tiene opci??n de negritas.
                    <br>Eso sin mencionar que como est?? m??s orientado a la toma de notas, no tiene opciones mas
                    complejas como lo es crear listas o alguna vista de
                    agenda o calendario.
                </p>
            </div>

            <hr>
            <h4 class="titulos">Microsoft: To Do</h4>
            <div>
                <img src="../imagenes/stylelife_img/todo.jpg" class="img-fluid" alt="img-thumbnail"
                    style="margin-left: 7em;">
            </div>
            <div>
                <br>
                <p>La alternativa de Microsoft. Puedo decir que cuenta con muchas m??s funciones que Google Keep.
                    <br>Esta enfocada principalemente en listas de tareas complejas.
                <h5 class="texto_importante">Cualidades:</h5>
                <ul>
                    <li>Poder crear listas o proyectos</li>
                    <li>Posibilidad de agregar subtareas, notas y archivos en cada tarea</li>
                    <li>Fondos de colores o imagenes dentro de la aplicaci??n</li>
                    <li>Cuenta con una aplicaci??n de escritorio, por lo tanto se sincroniza</li>
                    <li>Vista de tareas de hoy, esta semana y proximamente</li>
                    <li>Compartir tus notas</li>
                </ul>
                <br>
                <p class="parrafos">Vamos, que puedes crear un proyecto y compartirlo con tus colaboradores.
                </p>
                <h5 class="texto_importante">Desventajas:</h5>
                <p>Falta una vista de calendario o agenda. Tampoco se le puede agregar estilos al texto como negritas o
                    cursiva.
                    <br>Tampoco se le puede poner fecha de vencimiento a una subtarea.
                    <br>A??n as??, es una excelente opci??n.
                </p>
            </div>
            <hr>
            <h6 class="texto_importante">Y ahora la que es para m?? de las m??s completas en todos los aspectos:</h6>

            <h4 class="titulos">Tick Tick</h4>
            <div>
                <img src="../imagenes/stylelife_img/tick.png" class="img-fluid" alt="img-thumbnail"
                    style="margin-left: 22em;">
                <br>
                <br>
                <h5 class="texto_importante">Como bien lo dice su lema: Stay Organized Stay Creative
                    <br>Esta plataforma te da todo para hacerlo.
                </h5>
                <p>Entre sus numerosas caracteristicas est??n:</p>
                <ul>
                    <li>Ya sea que haya una tarea relacionada con el trabajo o un objetivo personal, TickTick est?? aqu??
                        para ayudarle a administrar todos sus tareas pendientes.</li>
                    <li>Recordatorios en cualquier momento y cualquier lugar</li>
                    <li>Vistas Flexibles de calendario</li>
                    <li>Etiquetas y Prioridades</li>
                    <li>Listas inteligentes</li>
                    <li>Poder hacer seguimiento de h??bitos</li>
                </ul>
                <p>En verdad que est?? plataforma es muy completa, pero a diferencia de las dem??s, esta si es de paga.
                    Tiene su forma free, pero para Poder
                    sacarle m??s provecho, se debe pagar una suscripci??n. A??n as??, para un uso intermedio es m??s que
                    perfecta.
                </p>
            </div>
            <h2 class="texto_importante">Y a ti... ??Cu??l te gust?? m??s?</h2>
            <br>
        </div>

    </section>
    <section>
        <!-- por cada nivel de carpetas poner " ../ " -->
        <iframe id="frame_comments" scrolling="yes"
            src="../../components/commentsbox.php?idArticulo=1 & username=<?= $usuario; ?>"></iframe>
    </section>
</body>

<!-- por cada nivel de carpetas poner " ../ " -->
<!--<iframe id="frame_info" scrolling="no" src="../../components/info.html"></iframe>-->

<footer id="MENU">
    <!-- por cada nivel de carpetas poner " ../ " -->
    <iframe id="frame_info" scrolling="no" src="../../components/info.php"></iframe>
</footer>

</html>