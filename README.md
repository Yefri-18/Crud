# Inventario CRUD

Este es un proyecto básico de una aplicación CRUD para la gestión de inventarios, desarrollado en PHP con MySQL como base de datos.

## Características

- Crear, leer, actualizar y eliminar productos en el inventario.
- Interfaz visual atractiva con estilos personalizados.
- Manejo de base de datos MySQL para almacenar los productos.
- Sistema de navegación intuitivo para la gestión del inventario.

## Estructura del Proyecto


## Instalación

Sigue estos pasos para poner en funcionamiento el proyecto en tu entorno local:

1. Clona el repositorio:
    ```bash
    git clone https://github.com/tu-usuario/nombre-del-repositorio.git
    ```

2. Navega a la carpeta del proyecto:
    ```bash
    cd nombre-del-repositorio
    ```

3. Configura la base de datos MySQL:
    - Crea una base de datos en MySQL con el siguiente comando:
    ```sql
    CREATE DATABASE inventario_db;
    ```
    - Ejecuta este script SQL para crear la tabla:
    ```sql
    USE inventario_db;

    CREATE TABLE productos (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        descripcion TEXT NOT NULL,
        cantidad INT(11) NOT NULL,
        precio DECIMAL(10, 2) NOT NULL
    );
    ```

4. Configura la conexión a la base de datos en el archivo `includes/db.php`:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "inventario_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    ?>
    ```

5. Inicia un servidor local (ej. `XAMPP`, `WAMP`) y navega a `http://localhost/nombre-del-proyecto/`.

## Uso

- **Página principal**: Muestra la lista de productos en el inventario.
- **Añadir producto**: Clic en "Añadir Nuevo Producto" para agregar un nuevo producto.
- **Editar producto**: Usa el enlace "Editar" para modificar un producto.
- **Eliminar producto**: Usa el enlace "Eliminar" para quitar un producto del inventario.

## Capturas de Pantalla

### Página Principal
![Página Principal](ruta/a/imagen.png)

### Añadir Producto
![Añadir Producto](ruta/a/imagen.png)

## Tecnologías Utilizadas

- **PHP**: Lenguaje de backend.
- **MySQL**: Sistema de gestión de base de datos.
- **HTML/CSS**: Estructura y estilos de la interfaz.
- **Git**: Control de versiones.

## Contribuciones

Si deseas contribuir a este proyecto, sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-caracteristica`).
3. Haz tus cambios y haz un commit (`git commit -m "Añadir nueva característica"`).
4. Sube tus cambios (`git push origin feature/nueva-caracteristica`).
5. Abre un Pull Request.

## Licencia

Este proyecto está bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.
