create database encuesta1;
use encuesta1;
CREATE TABLE alimentacion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    consumo_lacteos INT NOT NULL,
    porciones_frutas INT NOT NULL,
    cuida_alimentacion ENUM('Si', 'No') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE alojamiento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    frecuencia_viajes INT NOT NULL,
    tipo_alojamiento ENUM('Hotel', 'Hostal', 'Apartamento', 'Casa de huéspedes') NOT NULL,
    satisfaccion ENUM('Muy Satisfecho', 'Insatisfecho', 'Neutral') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE movilidad (
    id INT AUTO_INCREMENT PRIMARY KEY,
    frecuencia_transporte_publico INT NOT NULL,
    medio_transporte ENUM('Bus', 'Transmilenio', 'Bicicleta', 'Coche', 'Caminando') NOT NULL,
    seguridad ENUM('Sí', 'No') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE resultados_finales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alimentacion_id INT,
    alojamiento_id INT,
    movilidad_id INT,
    FOREIGN KEY (alimentacion_id) REFERENCES alimentacion(id),
    FOREIGN KEY (alojamiento_id) REFERENCES alojamiento(id),
    FOREIGN KEY (movilidad_id) REFERENCES movilidad(id),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);