<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO productos (nombre, descripcion, cantidad, precio) VALUES ('$nombre', '$descripcion', '$cantidad', '$precio')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo producto añadido";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Añadir Producto</h1>
        <form action="crear.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre del Producto" required>
            <textarea name="descripcion" placeholder="Descripción del Producto" required></textarea>
            <input type="number" name="cantidad" placeholder="Cantidad" required>
            <input type="number" name="precio" placeholder="Precio" required>
            <input type="submit" value="Añadir Producto">
        </form>
        <div class="button-group">
            <a href="index.php">Volver a la lista de productos</a>
        </div>
    </div>
    <footer>
        &copy; 2024 Inventario. Todos los derechos reservados.
    </footer>
</body>
</html>
