<?php
$conexion = new mysqli("localhost", "root", "", "estudiantes");

$id = $_GET["id"];

$sql = "SELECT * FROM alumno WHERE id=$id";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    echo "<h3>Datos del estudiante:</h3>";
    echo "Cédula: " . $fila["cedula"] . "<br>";
    echo "Nombre: " . $fila["nombre"] . "<br>";
    echo "Correo: " . $fila["correo"] . "<br>";
    echo "Carrera: " . $fila["carrera"] . "<br>";
} else {
    echo "Estudiante no encontrado.";
}

$conexion->close();
?>
