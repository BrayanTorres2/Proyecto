<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Pagina en php'; ?></h1>
    <h2>Hola cliente</h2>

    <p>Este es un ejemplo básico de PHP</p>

    <br>

    <form action="respuesta.php" method="get">
        <input type="text" name="sser" id="usser" placeholder="Usuario">
        <input type="password" name="ass" id="pass" placeholder="Contraseña">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
