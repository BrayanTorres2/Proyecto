<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/estiloB.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="App/Page.js"></script>

</head>

    <body id="Login">
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

    <form action="respuesta.php" method="get">
        <input type="text" name="usser" id="usser" placeholder="Usuario">
        <input type="password" name="pass" id="pass" placeholder="Contraseña">
        <button type="submit" class="BIngresar" id="validateButton" value="Enviar" >Ingresar</button>
    </form>

    <br><br><br><br><br><br><br><br><br><br><br>
    </body>
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
