<?php
include ("Conexion.php");
$nombre = $_POST["Nombreusuario"];
$password = $_POST["Contrasena"];

$consulta = mysqli_query ($conexion,"SELECT * FROM Usuarios WHERE Nombreusuario = '$nombre' AND Contrasena = '$password'");

if(!$consulta){
    echo 'Thanos evaporo al usuario... no existe';
    header('Location: https://cdn.20m.es/img2/recortes/2019/04/29/940221-600-338.jpg');

else{
     echo '<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="AppC.css" type="text/css">
    <script type="text/javascript" src="Page.js"></script>
    <title>App</title>
</head>

<body>

    <!-- navbar -->
    <header class="nav_bar fixed-top">

        <div class="menu_bar">
            <p href="#" class="boton_menu"><span class="icon-menu"></span>Menu</p>
        </div>

        <nav class="barra">
            <ul class="items_list">
                <li class="items_nav"><a href="../Login.php">Salir</a></li>
            </ul>
        </nav>
    </header>
    <br>


    <form name="f1" id="formulair">
        <b>
            <h1 id="titulo">Dessert</h1>
        </b>
        <div id="ps">
            <img src="foto1.jpg" id="IMGPostre">
            <b>
                <article>
                    <h2 id="nombresinho">Waffles Glaseados</h2>
                </article>
            </b>
            <div class="boxes">


                <input type="button" id="R" class="botones" value="" onclick="rechazar()">
                <input type="button" id="G" class="botones" value="" onclick="SGustos()">
                <input type="button" id="SG" class="botones" value="" onclick="gustos()">
        </div>
    </form>
    <br><br>

    <form action="mostra_listas_gustos.php" method="get">
    <div>
        <br>
        <input type="text" name="user2" id="user2" placeholder="Ingresa tu usuario"required>
        <br>
        <br>
        <input type="text" name="demo22" id="demo22" placeholder="valor de gustos"required>
        <br>
        <br>
        <input type="text" name="demo33" id="demo33" placeholder="valor de super gustos" required>
        <br>
        <input type="button" id="Guardar" value="Guardar" class="boxes" onclick="Final(), Final2()">
        <input type="submit" id="Enviar" value="enviar" class="boxes" onclick="Final(), Final2()">
        <p id="demo2" name="demo2" ></p>
        <p id="demo3" name="demo3" ></p>
    </div>
    </form>

    <!-------------------------------------------------PHP------------------------------------------------------------->

</body>
<br><br><br>
<footer class="footer">
    Disfruta nosotros hacemos el resto &#128521;
</footer>



</html>';
}
?>
