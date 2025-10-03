<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina form WK3</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : ''; //Operador ternario, si existe el parametro nombre en la URL. Asigna el nombre, sino entonces será vacio.
    ?>

    <form method="GET" action="">
        <label>Nombre:</label>
        <input type="text" name="nombre"value="<?php echo ($nombre); ?>"  required><br>
        <button type="submit">Iniciar sesion</button>
    </form>
</body>
</html>
