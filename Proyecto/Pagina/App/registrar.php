<?php
//conexion con la base de datos y el servidor
$link=mysql_connect("localhost","server","server") or die ("<h2>No se pudo encontro el servidor carnal</h2>");
$db=mysql_select_db("Usuarios",$link) or die("<h2>Error de la conexion</h2>");
//obtenemos los valores del formulario
$nombre=$_post('Nombreusuario');
$contraseña=$_post('Contraseña');
$correo=$_post('Correoelectronico');
$Confirmarcontraseña=$_post('Confirmarcontraseña');
//obtiene la longitud de un string
$req =(strlen($nombre)*strlen($contraseña)*strlen($correo)*strlen($Confirmarcontraseña)) or die("No se han llenado todos los campos <br><br> <a href='../Registro.php>V</a>'");
//se confirma la contraseña
if($contraseña != $Confirmarcontraseña){
    die ('Las contraseñas;as no coinciden <br><br><a href="../Registro.php">Volver</a>');
}
//se encripta la contraseña
$contraseñaUsuario=md5($contraseña);
//ingresar la informacion a la tabla usuarios
mysql_query("insert into Usuarios values('','$nombre','$contraseña','$correo','$Confirmarcontraseña')",$link) or die ("<h2>Error de envio</h2>")
echo '
<h2>Registro Completo</h2>
<h5>Gracias Por registrase en nuestra wed, ya puede ingresar como usuario</h5>
<a href="../Login.php">Ingresar</a>
';
  ?>
