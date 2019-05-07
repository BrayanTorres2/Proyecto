<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloB.css" type="text/css">
    <script src="Page.js" type="text/javascript"></script>
    <title>Equipo de trabajo</title>
</head>

<body id="bos">

    <!-- navbar -->
    <header class="nav_bar fixed-top">

        <div class="menu_bar">
            <p href="#" class="boton_menu"><span class="icon-menu"></span>Menu</p>
        </div>

        <nav class="barra">
            <ul class="items_list">
                <li class="items_nav"><a href=index.php>Inicio</a></li>
                <li class="items_nav"><a href=AcercaDe.php>Acerca De</a></li>
                <li class="items_nav"><a href=Team.php>Equipo</a></li>
                <li class="items_nav"><a href=Contacto.php>Contacto</a></li>
                <li class="items_nav"><a href=Login.php>Ingresar</a></li>
            </ul>
        </nav>
    </header>
    <br><br><br>
    <!-------------------------------------------------Team------------------------------------------------------------->

    <center>
        <h1 id="h1s">Equipo de Trabajo</h1>
    </center>
    <br>
    <br>
    <div id="Uribe">
        <h1> Brayan Torres</h1>
        <div><IMG SRC="Imagenes/Musolini.jpg" ALT="Brayan Torres"> </IMG> </div>
        <div id="info1">
            <p class="info">Estudiante de Ingenieria de sistemas de quinto semestre,El maquetador es el encargado de convertir a HTML5, CSS3 y Javascript los mockups proporcionados por el diseñador gráfico. Es algo así como el Dr. Torres que da vida a lo que hasta entonces era una simple imagen estática. No es el responsable de la programación de la web, solo aplica la estructura básica (HTML, microformatos), la hoja de estilo y alguna que otra interacción con Javascript.</p>
        </div>
    </div>

    <div id="hitler">
        <h1>Sebastian Sanchez</h1>
        <div><IMG SRC="Imagenes/hitler2.0.png" ALT="Sebastian Sanchez"></IMG></div>
        <div id="info2">
            <p class="info">Estudiante de Ingenieria de sistemas de quinto semestre, Es el encargado de diseñar la imagen general del proyecto (logotipo, web, email templates) utilizando los wireframes que generan los UX Designers, imágenes, tipografías y una paleta de colores que se ajusten al Look & Feel del cliente. En algunas ocasiones el diseñador gráfico hace también el trabajo de UX.</p>
        </div>
    </div>


</body>
<br><br><br><br><br><br><br><br><br>
<footer class="footer">
    E-mail: <b>btorres20612@universidadean.edu.co</b> and <b>Jsanche03060@universidadean.edu.co</b><br>
    Aviso de privacidad |Política de privacidad | Manual de Cookies u otras Tecnologías
</footer>
 <!-------------------------------------------------PHP------------------------------------------------------------->
   <?php
        if (isset($_COOKIE['test'])){
            echo '<p>Bienvenido/p>';
            setcookie('test', '', time() + 3600);
        }else {
            echo '<p>A DESSERTS</p>';
            setcookie('test', 'Profe van 9 horas sin parar de esto' );
        }
    ?>
</html>
