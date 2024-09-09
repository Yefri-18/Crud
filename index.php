<?php
include 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Inventario</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Productos</h1>
        <div class="button-group">
            <a href="crear.php">Añadir Nuevo Producto</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM productos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["descripcion"] . "</td>";
                        echo "<td>" . $row["cantidad"] . "</td>";
                        echo "<td>$" . $row["precio"] . "</td>";
                        echo "<td>
                                <a href='editar.php?id=".$row["id"]."'>Editar</a> | 
                                <a href='eliminar.php?id=".$row["id"]."'>Eliminar</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No hay productos en el inventario</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        &copy; 2024 Inventario. Todos los derechos reservados.
    </footer>
</body>
</html>
