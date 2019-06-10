<?php
include ('Conexion.php')
/* insertar datos en la base de datos */
    $userDB=$_POST['Nombreusuario'];
    $contra=$_POST['Contrasena'];
    $post="";

     if ($userDB=="" || $contra=="" || $email=""){
        echo 'alert("Datos incorrectos o incompletos")';
    }
        $sql= "INSERT INTO Usuarios (Nombreusuario,Contrasena,Correoelectronico) VALUES ('".$userDB."','".$contra."','".$_POST['Correoelectronico']."')";


         if (mysqli_query($conexion, $sql) === TRUE) {

            header('Location: ../Login.php');

        } else {

            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);

        }
        mysqli_close( $conexion );

?>


