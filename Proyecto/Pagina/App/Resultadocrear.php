<?php
include('DBconection.php');?>

<?php
    $user=$_POST['Nombreusuario'];
    $contra=$_POST['Contrasena'];
    $email=$_POST['Correoelectronico'];
    $post="";

     if ($user=="" || $contra=="" || $email=""){
        echo 'alert("Datos incorrectos o incompletos")';
    }
        $sql= "INSERT INTO Usuarios (Nombreusuario,Contrasena,Correoelectronico) VALUES ('".$user."','".$contra."','".$email."')";

        echo $sql;
         if ($conexion->query($sql) === TRUE) {

            echo 'alert("Registro completo")';

        } else {

            echo 'alert("Error")';

        }
        $conexion->close();
    }
?>


