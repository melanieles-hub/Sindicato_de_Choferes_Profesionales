<?php
echo "PHP funcionando";
?>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Configuración de la conexión
$host = "127.0.0.1";
$user = "root";
$pass = ""; 
$db   = "sindicato";
$port = "3307"; // <-- ESTO ES LO MÁS IMPORTANTE

// Intentar la conexión
$conexion = mysqli_connect($host, $user, $pass, $db, $port);

// Verificar si funcionó
if (!$conexion) {
    die("Error crítico de conexión: " . mysqli_connect_error());
}
?>
