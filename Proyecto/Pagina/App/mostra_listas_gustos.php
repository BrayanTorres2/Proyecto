<?php
$usuario= $_GET['demo1'];
$gustos= $_GET['demo2'];
$sgustos= $_GET['demo3'];
$archivo = fopen($usuario.'.txt', "a");
fputs($archivo, $gustos);
fputs($archivo, $sgustos);
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
        echo 'Sus Gustos '.$archivo;
    ?>
</body>

</html>
