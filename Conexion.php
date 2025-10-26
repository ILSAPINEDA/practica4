<?php
$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$port = getenv('DB_PORT'); // El puerto de PostgreSQL es 5432

try {
    // CORRECCIÓN: Se cambió 'mysql:' a 'pgsql:'.
    // La sintaxis para PostgreSQL es ligeramente diferente.
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$pass");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Nota: El parámetro 'charset=utf8' ya no es necesario aquí.
    
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>