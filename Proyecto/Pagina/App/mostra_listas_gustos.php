<?php
$usuario= $_GET['user2'];
$gustos= $_GET['demo22'];
$sgustos= $_GET['demo33'];
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
        echo 'Sus postres han sido guardados  '.$usuario;
    ?>
</body>

</html>


