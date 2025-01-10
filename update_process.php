<?php
include "db.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];

$sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo', edad=$edad WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error al actualizar: " . $conn->error;
}
?>
