<?php
include('DBconection.php');
?>


<div class="container">

    <?php
    if (isset($_POST['Nombreusuario']) && isset($_POST['Contrasena']) && isset($_POST['Confirmarcontrasena']) && isset($_POST['Correoelectronico'])){
        $sentenciaSQL = "INSERT INTO `Usuarios` ( `Nombreusuario`,`Contrasena`,`Confirmarcontrasena`,`Correoelectronico`)";
        $sentenciaSQL = $sentenciaSQL."VALUES ( '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Nombreusuario']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Contrasena']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Confirmarcontrasena']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['Correoelectronico']."')";
        if ($conexion->query($sentenciaSQL) === TRUE) {
            echo "Usuario creado";
        } else {
            echo "Error: " . $sentenciaSQL . "<br>" . $conexion->error;
        }
        $conexion->close();
    }
?>
</div>

