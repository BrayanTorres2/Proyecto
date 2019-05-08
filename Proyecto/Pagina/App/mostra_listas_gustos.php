<?php
$usuario = $_GET['user'];
$seleccion = $_GET['IMGPostre'];
$archivo = fopen($usuario.'.txt', "a");
fputs($archivo, $seleccion);
fclose($archivo);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        echo 'se escribió '.$archivo;
    ?>
</body>

</html>
