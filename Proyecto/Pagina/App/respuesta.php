<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuestas</title>
</head>
<body>
    <?php
    session_start();
   $pass = [
    "brayan" => "torres",
    "sebastian" => "sanchez",
    "fabian" => "meza",
    ];
    if (isset($pass[$_POST['usser']])){
        if ($pass[$_POST['usser']] == $_POST['pass']){
            if(!isset($_SESSION["cuenta_paginas"])){
                $_SESSION["cuenta_paginas"]=1;
            }else{
              $_SESSION["cuenta_paginas"]++;
            }
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

          <input type="button" id="Capturar" class="" value="Capturar" onclick="spuds()">
          <input type="submit" id="enviar" value="enviar">
          <p id="demo1">hi</p>
          <p id="demo2">hi2</p>
          <p id="demo3">hi3</p>

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


    <!-------------------------------------------------PHP------------------------------------------------------------->

</body>
<br><br><br>
<footer class="footer">
    Disfruta nosotros hacemos el resto &#128521;
</footer>



</html>';
        }else{
            echo '<!DOCTYPE html>
<html lang="en">
<head>
    <title>*Chask*</title>
    <meta charset="UTF-8">

</head>

    <body id="Login">
    Thanos evaporo tu contraseña... no existe
    <img src="https://cdn.20m.es/img2/recortes/2019/04/29/940221-600-338.jpg"/>
    </body>


</html>';
        }
    }else{
        echo '
        <!DOCTYPE html>
<html lang="en">
<head>
    <title>*Chask*</title>
    <meta charset="UTF-8">

</head>

    <body id="Login">
    Thanos evaporo al usuario... no existe
    <img src="https://cdn.20m.es/img2/recortes/2019/04/29/940221-600-338.jpg"/>



</html>';
    }
    ?>
</body>
</html>
