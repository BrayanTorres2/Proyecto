<?php
session_start();

$nombre = $_POST['Nombreusuario'];
$password = $_POST['Contrasena'];

		require_once 'Resultadocrear.php';
  $conn = dbConnect();


$consulta = mysqli_query ($conn, "SELECT * FROM sesion WHERE user = '$nombre' AND pass = '$password'");

if(!$consulta){
 echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error " . mysqli_error($mysqli);
}
else{
print "Bienvenido";
}

?>
