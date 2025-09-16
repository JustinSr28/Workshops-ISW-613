<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina 01</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <h1 class="hora">Hora: </h1>
    <p class="hora">
        <?php
        date_default_timezone_set("America/Costa_Rica"); 
        echo date("h:i:s a"); 
        ?>
    </p>

     <h1 class="fecha">Fecha: </h1>
    <p class="fecha">
        <?php
        echo date("d/m/Y");
        ?>
    </p>
</body>
</html>
