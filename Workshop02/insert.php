<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina BD</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
     <?php
        $host = "localhost";      
        $user = "root";          
        $pass = "";               
        $db   = "workshop02";    

        $conn = new mysqli($host, $user, $pass, $db);

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['email'];

     $sql = "INSERT INTO usuarios (Nombre, Apellido, Telefono, Correo) 
     VALUES ('$nombre', '$apellido', '$telefono', '$correo')";

     $conn->query($sql);

     $conn->close();
     ?> 
</body>
</html>
