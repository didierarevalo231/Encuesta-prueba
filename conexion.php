<?php
$servername = "localhost";
$username = "root"; 
$password = "7830015Didier"; 
$dbname = "encuesta1"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>