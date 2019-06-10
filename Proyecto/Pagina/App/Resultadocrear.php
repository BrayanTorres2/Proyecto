<?php
/*Conexion a la base dedatos */
$host = 'localhost';
$user = 'server';
$password = 'server';
$db = 'carpetitaProyecto';
$conexion = mysqli_connect('localhost', 'server', 'server', 'carpetitaProyecto') or die ("No se ha podido conectar al servidor de Base de datos");

/* insertar datos en la base de datos */
    $userDB=$_POST['Nombreusuario'];
    $contra=$_POST['Contrasena'];
    $post="";

     if ($userDB=="" || $contra=="" || $email=""){
        echo 'alert("Datos incorrectos o incompletos")';
    }
        $sql= "INSERT INTO Usuarios (Nombreusuario,Contrasena,Correoelectronico) VALUES ('".$user."','".$contra."','".$_POST['Correoelectronico']."')";


         if (mysqli_query($conexion, $sql) === TRUE) {

            echo 'alert("Registro completo")';

        } else {

            echo 'alert("Error")';

        }
        mysqli_close( $conexion );

?>


