<?php
include('DBConection.php');
?>

<div class="container">

    <?php
    if (isset($_POST['Nombreusuario']) && isset($_POST['Contraseña']) && isset($_POST['Confirmarcontraseña']) && isset($_POST['Correoelectronico'])){
        $sentenciaSQL = "INSERT INTO `Usuarios` ( `Nombreusuario`, `Contraseña`, `Confirmarcontraseña`, `Correoelectronico`) ";
        $sentenciaSQL = $sentenciaSQL."VALUES ( '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Nombreusuario']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Contraseña']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Confirmarcontraseña']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Correoelectronico']."', 1)";
        if ($conexion->query($sentenciaSQL) === TRUE) {
            echo "Usuario creado";
        } else {
            echo "Error: " . $sentenciaSQL . "<br>" . $conexion->error;
        }
        $conexion->close();
    }
?>
</div>

