<?php
$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$port = getenv('DB_PORT');

try {
    // CORRECCIÓN: Se cambió 'mysql:' a 'pgsql:'.
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$pass"); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
    die(); // Añadir die() para detener la ejecución si la conexión falla
}
?>
