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
            <br>
            <hr>
            <p>Si tu eres de esas personas que como yo le encanta tomar notas, hacer listas de tareas, recordatorios...
                todo desde tu Android y
                que además se sincronize con tu laptop... ¡Este artículo es para tí!
                Llevo un buen tiempo investigando varias apps de este estilo, y aquí te muestro las que más me gustaron
                y parecieron más utiles.
            </p>
            <h4 class="titulos">Google Keep: Menos es más</h4>
            <div>
                <img src="../imagenes/stylelife_img/google-keep.png" class="img-fluid" alt="img-thumbnail"
                    style="margin-left: 17em;">
            </div>
            <div>
                <p>Me encanta porque con tu cuenta de Google puedes sincronizar los datos de la app con la versión web.
                    Es la que más uso por su simpleza.
                <h5 class="texto_importante">Ventajas:</h5>
                <p><br> Vamos, que si quieres hacer una anotación rápida o una nota de voz o la foto de algo, Google
                    Keep es la mejor opción.</p>
                <h5 class="texto_importante">¡Nisiquiera debes preocuparte por guardarlas, ya que lo hacen solas!</h5>
                </p>
                <br>
                <p>Entre sus cualidades están:</p>
                <ul>
                    <li>Uso de etiquetas</li>
                    <li>Recordarios</li>
                    <li>Widgets</li>
                    <li>Notas de colores</li>
                    <li>Poder crear notas de voz, agregar casillas de verificación, agregar imágenes</li>
                    <li>Compartir tus notas</li>
                </ul>
                <br>
                <p class="parrafos">Vamos, que puedes tener tu lista de la compra ahí y la puedes compartirla con tu
                    pareja o quien quieras.
                    <br>Y como se esperaba por ser de Google es gratis.<br>
                </p>
                <h5 class="texto_importante">Desventajas:</h5>
                <p>Lo que no me gusta es que no puedes combinar por ejemplo las casillas de verificación con texto
                    normal y tampoco tiene opción de negritas.
                    <br>Eso sin mencionar que como está más orientado a la toma de notas, no tiene opciones mas
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
                <p>La alternativa de Microsoft. Puedo decir que cuenta con muchas más funciones que Google Keep.
                    <br>Esta enfocada principalemente en listas de tareas complejas.
                <h5 class="texto_importante">Cualidades:</h5>
                <ul>
                    <li>Poder crear listas o proyectos</li>
                    <li>Posibilidad de agregar subtareas, notas y archivos en cada tarea</li>
                    <li>Fondos de colores o imagenes dentro de la aplicación</li>
                    <li>Cuenta con una aplicación de escritorio, por lo tanto se sincroniza</li>
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
                    <br>Aún así, es una excelente opción.
                </p>
            </div>
            <hr>
            <h6 class="texto_importante">Y ahora la que es para mí de las más completas en todos los aspectos:</h6>

            <h4 class="titulos">Tick Tick</h4>
            <div>
                <img src="../imagenes/stylelife_img/tick.png" class="img-fluid" alt="img-thumbnail"
                    style="margin-left: 22em;">
                <br>
                <br>
                <h5 class="texto_importante">Como bien lo dice su lema: Stay Organized Stay Creative
                    <br>Esta plataforma te da todo para hacerlo.
                </h5>
                <p>Entre sus numerosas caracteristicas están:</p>
                <ul>
                    <li>Ya sea que haya una tarea relacionada con el trabajo o un objetivo personal, TickTick está aquí
                        para ayudarle a administrar todos sus tareas pendientes.</li>
                    <li>Recordatorios en cualquier momento y cualquier lugar</li>
                    <li>Vistas Flexibles de calendario</li>
                    <li>Etiquetas y Prioridades</li>
                    <li>Listas inteligentes</li>
                    <li>Poder hacer seguimiento de hábitos</li>
                </ul>
                <p>En verdad que está plataforma es muy completa, pero a diferencia de las demás, esta si es de paga.
                    Tiene su forma free, pero para Poder
                    sacarle más provecho, se debe pagar una suscripción. Aún así, para un uso intermedio es más que
                    perfecta.
                </p>
            </div>
            <h2 class="texto_importante">Y a ti... ¿Cuál te gustó más?</h2>
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
    <iframe id="frame_info" scrolling="no" src="../../components/info.html"></iframe>
</footer>

</html>