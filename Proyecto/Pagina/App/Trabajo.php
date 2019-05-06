<!DOCTYPE html>
<html lang="es">
<head>

    <title>App</title>
</head>

<body>


    <!-------------------------------------------------PHP------------------------------------------------------------->
 <?php
$pass=[
        "brayan"=>"Torres",
        "SEBASTIAN"=>"SANCHEZ",
        "fabian"=>"meza",
        ];
    if(isset($pass[$_GET['name']])){
        if($pass[$_GET['name']]==$_GET['contraseña']){
            echo 'Bienvenido a Desserst';
        }
        else{
            echo 'contraseña incorrecta'
        }
        else{
            echo 'Usuario no encontrado';
        }
   ?>
</body>
<br><br><br>
<footer class="footer">
    Disfruta nosotros hacemos el resto &#128521;
</footer>



</html>
