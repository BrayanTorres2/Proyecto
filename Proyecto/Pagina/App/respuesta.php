<?php
include ('Conexion.php');
session_start();

$nombre = $_POST['usser'];
$password = $_POST['pass'];

$consulta = mysqli_query ($conexion, "SELECT * FROM sesion WHERE user = '$nombre' AND pass = '$password'");

if(!$consulta){
 echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error ";
}
else{
print "Bienvenido";
}

?>
