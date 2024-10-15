<?php
require_once 'conexion.php';

// Obtener datos del formulario
$frecuencia_transporte_publico = $_POST['frecuencia_transporte_publico'];
$medio_transporte = $_POST['medio_transporte'];
$seguridad_transporte_publico = $_POST['seguridad_transporte_publico'];

// Insertar datos en la base de datos
$sql = "INSERT INTO movilidad (frecuencia_transporte_publico, medio_transporte, seguridad) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $frecuencia_transporte_publico, $medio_transporte, $seguridad_transporte_publico);

if ($stmt->execute()) {
    // Redirigir a la página de resultados después de guardar los datos
    header("Location: resultados.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>