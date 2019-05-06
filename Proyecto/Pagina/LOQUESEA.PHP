<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <?php
    $pass = [
    "jose" => "cordoba",
    "manuel" => "castillo",
    "krusty" => "ean",
    ];
    if (isset($pass[$_GET['usser']])){
        if ($pass[$_GET['usser']] == $_GET['pass']){
            echo 'Bienvenido';
        }else{
            echo 'Contraseña incorrecta';
        }
    }else{
        echo 'Usuario no encontrado';
    }
    ?>
</body>
</html>
