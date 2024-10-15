<?php
include 'conexion.php'; // Incluye la conexión a la base de datos

// Recupera los datos del formulario
$consumo_lacteos = $_POST['consumo_lacteos'];
$porciones_frutas = $_POST['porciones_frutas'];
$cuida_alimentacion = $_POST['cuida_alimentacion'];

// Inserta los datos en la base de datos
$sql = "INSERT INTO alimentacion (consumo_lacteos, porciones_frutas, cuida_alimentacion) VALUES ('$consumo_lacteos', '$porciones_frutas', '$cuida_alimentacion')";

if ($conn->query($sql) === TRUE) {
    // Redirige al siguiente módulo (Alojamiento)
    header("Location: alojamiento.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>