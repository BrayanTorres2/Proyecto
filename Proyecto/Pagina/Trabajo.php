<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="App/AppC.css" type="text/css">
    <script type="text/javascript" src="App/Page.js"></script>
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
               <li class="items_nav"><a href=lista.html>Inicio</a></li>
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
        </div>
    </form>
</body>
<br><br><br>
<footer class="footer">
    Disfruta nosotros hacemos el resto &#128521;
</footer>
 <!-------------------------------------------------PHP------------------------------------------------------------->
    <?php
    $pass=[
        "brayan"=>"Torres",
        "SEBASTIAN"=>"SANCHEZ",
        "fabian"=>"meza",
        ];
    if(isset($pass[$_POST['usuario']])){
        if($pass[$_POST['usuario']]==$_POST['contraseña']){
            echo 'Bienvenido a Desserst';
        }
        else{
            echo 'contraseña incorrecta'
        }
        else{
            echo 'Usuario no encontrado';
        }
    }


        if (isset($_COOKIE['test'])){
            echo '<p>Hay Cookie</p>';
            setcookie('test', '', time() - 3600);
        }else {
            echo '<p>No hay Cookie</p>';
            setcookie('test', 'mi asombrosa cookie' );
        }
?>



</html>
