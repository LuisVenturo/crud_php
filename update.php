<?php
include "db.php";
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
        <input type="email" name="correo" value="<?php echo $row['correo']; ?>" required>
        <input type="number" name="edad" value="<?php echo $row['edad']; ?>" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
