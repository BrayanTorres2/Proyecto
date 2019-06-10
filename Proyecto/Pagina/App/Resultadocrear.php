<?php
include('DBconection.php');

    if (isset($_POST['Nombreusuario']) && isset($_POST['Contrasena']) && isset($_POST['Confirmarcontrasena']) && isset($_POST['Correoelectronico'])){


        $sql= "INSERT INTO Usuarios (Nombreusuario,Contrasena,Correoelectronico) VALUES ('".$_POST['Nombreusuario']."','".$_POST['Contrasena']."','".$_POST['Correoelectronico']."')";

        echo $sql
        if ($conexion->query($sql) === TRUE) {
            echo "Usuario creado";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        $conexion->close();
    }
?>


