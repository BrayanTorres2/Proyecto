<?php
include('DBconection.php');?>

<?php
    $user=$_POST['Nombreusuario'];
    $contra=$_POST['Contrasena'];
    $post="";

     if ($user=="" || $contra=="" || $email=""){
        echo 'alert("Datos incorrectos o incompletos")';
    }
        $sql= "INSERT INTO USUARIOS (Nombreusuario,Contrasena,Correoelectronico) VALUES ('".$user."','".$contra."','".$_POST['Correoelectronico']."')";

        echo $sql;
         if ($conexion->query($sql) === TRUE) {

            echo 'alert("Registro completo")';

        } else {

            echo 'alert("Error")';

        }
        $conexion->close();

?>


