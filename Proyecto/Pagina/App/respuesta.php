<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuestas</title>
</head>
<body>
    <?php
   $pass = [
    "brayan" => "torres",
    "sebastian" => "sanchez",
    "fabian" => "meza",
    ];
    if (isset($pass[$_GET['usser']])){
        if ($pass[$_GET['usser']] == $_GET['pass']){
            echo '<a href="Trabajo.php">Entrar a la app</a>;
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
