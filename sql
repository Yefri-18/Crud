CREATE TABLE productos (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    cantidad INT(11) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL
);
