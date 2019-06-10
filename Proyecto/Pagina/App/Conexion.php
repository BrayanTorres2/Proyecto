<?php
/*Conexion a la base dedatos */
$host = 'localhost';
$user = 'server';
$password = 'server';
$db = 'carpetitaProyecto';
$conexion = mysqli_connect('localhost', 'server', 'server', 'carpetitaProyecto') or die ("No se ha podido conectar al servidor de Base de datos");
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
