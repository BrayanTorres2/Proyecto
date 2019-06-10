<?php
session_start();

$nombre = $_POST['userDB'];
$password = $_POST['contrasena'];

		require_once 'conexion.php';
  $conn = dbConnect();


$consulta = mysqli_query ($conn, "SELECT * FROM sesion WHERE user = '$nombre' AND pass = '$password'");

if(!$consulta){
 echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error " . mysqli_error($mysqli);
}
else{
print "Bienvenido";
}

?>
