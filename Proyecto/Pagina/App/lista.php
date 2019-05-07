<!DOCTYPE html>
<html lang="en">
<head>
   <script src="App/Page.js"></script>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
    <?php
    $ar = fopen("datos.txt", "a") or die("datos no creados");
    fputs($ar, "devolvgustos()");
    fclose($ar);
    ?>
</body>
</html>
