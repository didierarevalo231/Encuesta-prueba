<?php
include 'conexion.php'; // Incluye la conexión a la base de datos

// Consultar los datos de las tres tablas
$result_alimentacion = $conn->query("SELECT * FROM alimentacion");
$result_alojamiento = $conn->query("SELECT * FROM alojamiento");
$result_movilidad = $conn->query("SELECT * FROM movilidad");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Encuesta</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {

            font-family: 'Roboto', sans-serif;
        background-color: #add8e6; 
            margin: 0;
            padding: 20px;
        }
        .repeat-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 15px 30px; /* Aumentar tamaño del botón */
            border-radius: 8px; /* Bordes más redondeados */
            cursor: pointer;
            font-size: 18px; /* Aumentar tamaño de fuente */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, transform 0.2s; /* Añadir efecto de transformación */
        }
        h1, h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: left;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        @media (max-width: 600px) {
            table {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Resultados de la Encuesta</h1>

    <h2>Alimentación</h2>
    <table>
        <tr>
            <th>Consumo de Lácteos</th>
            <th>Porciones de Frutas</th>
            <th>Cuida Alimentación</th>
        </tr>
        <?php while ($row = $result_alimentacion->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['consumo_lacteos']; ?></td>
                <td><?php echo $row['porciones_frutas']; ?></td>
                <td><?php echo $row['cuida_alimentacion']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <h2>Alojamiento</h2>
    <table>
        <tr>
            <th>Frecuencia de Viajes</th>
            <th>Tipo de Alojamiento</th>
            <th>Satisfacción</th>
        </tr>
        <?php while ($row = $result_alojamiento->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['frecuencia_viajes']; ?></td>
                <td><?php echo $row['tipo_alojamiento']; ?></td>
                <td><?php echo $row['satisfaccion']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <h2>Movilidad</h2>
    <table>
        <tr>
            <th>Frecuencia de Transporte Público</th>
            <th>Medio de Transporte</th>
            <th>Seguridad</th>
        </tr>
        <?php while ($row = $result_movilidad->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['frecuencia_transporte_publico']; ?></td>
                <td><?php echo $row['medio_transporte']; ?></td>
                <td><?php echo $row['seguridad']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <button class="repeat-button" onclick="location.href='Inicio.html'">Repetir Encuesta</button>

</body>
</html>

<?php
$conn->close(); // Cierra la conexión a la base de datos
?>