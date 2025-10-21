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
    include "provincias.php"; 
    $provincias = Provincia::cargarProvincias();
    ?>

    <form method="POST" action="insertUser.php">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" required><br>

        <label>Provincia:</label>
          <select name="idProvincia">
            <?php foreach ($provincias as $prov) { ?>
                <option value="<?php echo $prov['idProvincia']; ?>">
                    <?php echo $prov['provincia']; ?>
                </option>
            <?php } ?>
        </select><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
