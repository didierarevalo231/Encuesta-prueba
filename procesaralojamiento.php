<?php
require_once 'conexion.php';


// Obtener datos del formulario
$frecuencia_viajes = $_POST['frecuencia_viajes'];
$tipo_alojamiento = $_POST['tipo_alojamiento'];
$satisfaccion = $_POST['satisfaccion'];

// Insertar datos en la tabla de alojamiento
$sql = "INSERT INTO alojamiento (frecuencia_viajes, tipo_alojamiento, satisfaccion) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $frecuencia_viajes, $tipo_alojamiento, $satisfaccion);

if ($stmt->execute()) {
    // Obtener el ID de la respuesta almacenada
    $alojamiento_id = $stmt->insert_id;

    // Redirigir al módulo de movilidad
    header("Location: movilidad.html?alojamiento_id=" . $alojamiento_id);
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>