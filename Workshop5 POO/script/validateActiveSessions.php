<?php

require_once "../common/connection.php";

if ($argc < 2) {
    die("Uso: php validateActiveSessions.php <horas>\n");
}
date_default_timezone_set('America/Costa_Rica'); 

$horas = (int)$argv[1];
$segundosLimite = $horas * 3600;

/* Conectar a la base de datos */
$db = new ConnectionBD();
$conn = $db->getConnection();
if (!$conn) {
    die("Error: No se pudo conectar a la base de datos.\n");
}

echo "Validando sesiones mayores a $horas horas...\n";

// Traer todos los usuarios activos
$sql = "SELECT Id, username, last_login_datetime FROM users WHERE status = 'active'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $now = time();
    $inactivos = 0;

    while ($row = $result->fetch_assoc()) {
    $lastLogin = strtotime($row['last_login_datetime']);
    if ($lastLogin && ($now - $lastLogin) > $segundosLimite) {
        $id = $row['Id'];
        $updateSql = "UPDATE users SET status = 'inactive' WHERE Id = $id";
        if ($conn->query($updateSql)) {
            echo "Usuario '{$row['username']}' marcado como inactivo.\n";
            $inactivos++;
        }
    }
}

    echo "\nProceso completado. Usuarios inactivos: $inactivos\n";
} else {
    echo "No hay usuarios activos para validar.\n";
}

$conn->close();


?>