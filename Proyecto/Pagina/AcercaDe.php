<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/aboutstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="Page.js" type="text/javascript"></script>
    <title>Acerca de</title>
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
                <li class="items_nav"><a href=Team.phpl>Equipo</a></li>
                <li class="items_nav"><a href=Contacto.php>Contacto</a></li>
                <li class="items_nav"><a href=Login.php>Ingresar</a></li>
            </ul>
        </nav>
    </header>
    <br><br><br>
    <!-------------------------------------------------Pagina------------------------------------------------------------->


    <h3>Acerca de Desserts</h3>
    <article>
        <p><img id="imagen1" src="css/pictures/MK1.png" width="500" height="500">
            <h2>¿Que es Desserts?</h2><br>
            Una app en donde las citas son con los postres en vez de otras personas
            <br>
            <h2>¿Como funciona?</h2><br>
            Haciendo match con tus postres favoritos para luego poder comprar,guardar y pagar por ellos!
    </article>
    <br><br><br><br><br><br><br><br><br>
    <article>
        <p><img id="imagen2" src="css/pictures/MK2.png" width="500" height="500">
            <h2>¿Para que buscar parejas por tinder si puedes encontrar tu postre perfecto?</h2><br>
            Rapido, Sencillo y no te abandonaran<br>
            <br>El postre si es fijo el polvo no<br>
            Y tiene hora asegurada!
    </article>



</body>
<br><br><br><br><br><br><br><br><br>
<footer class="footer">
    E-mail: <b>btorres20612@universidadean.edu.co</b> and <b>Jsanche03060@universidadean.edu.co</b><br>
    Aviso de privacidad |Política de privacidad | Manual de Cookies u otras Tecnologías
</footer>
 <!-- --------------------------------------Php------->

   <?php
        if (isset($_COOKIE['test'])){
            echo '<p>Hay Cookie</p>';
            setcookie('test', '', time() - 3600);
        }else {
            echo '<p>No hay Cookie</p>';
            setcookie('test', 'mi asombrosa cookie' );
        }
    ?>
</html>
