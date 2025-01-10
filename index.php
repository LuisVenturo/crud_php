<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>CRUD con PHP</h1>

    <h2>Agregar Usuario</h2>
    <form action="create.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <button type="submit">Agregar</button>
    </form>

    <h2>Lista de Usuarios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
        <?php
        include "db.php";
        $result = $conn->query("SELECT * FROM usuarios");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['correo']}</td>
            <td>{$row['edad']}</td>
            <td>
                <a href='update.php?id={$row['id']}'>Editar</a> |
                <a href='delete.php?id={$row['id']}'>Eliminar</a>
            </td>
        </tr>";
        }
        ?>
    </table>
</body>

</html>