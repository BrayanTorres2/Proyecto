<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/aboutstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="Page.js" type="text/javascript"></script>
    <title>Contacto</title>
</head>

<body>
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


    <h2 id="c">Contactenos</h2>
    <form class="ss" action="" onsubmit="return validar_contacto();">

        <input class="aa" id="nu" type="text" name="Nombre usuario" placeholder="Nombre usuario" required>
        <input class="aa" id="ni" type="text" name="Nombre Inquietud" placeholder="Nombre Inquietud" required>
        <textarea class="aa" id="em" type="msg" name="Cuentanos" placeholder="Escribe tu mensaje" required></textarea>
        <button class="BRecuperar" type="submit">Contactanos!</button>

    </form>
    <script src="Page.js" type="text/javascript"></script>
</body>
<br><br><br><br><br>
<footer class="footer">
    E-mail: <b>btorres20612@universidadean.edu.co</b> and <b>Jsanche03060@universidadean.edu.co</b><br>
    Aviso de privacidad |Política de privacidad | Manual de Cookies u otras Tecnologías
</footer></html>
