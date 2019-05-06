<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="AppC.css" type="text/css">
    <script type="text/javascript" src="Page.js"></script>
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
