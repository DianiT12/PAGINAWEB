<?php
$conexion = new mysqli("localhost", "root", "", "estudiantes");

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$carrera = $_POST["carrera"];

$sql = "INSERT INTO alumno (cedula, nombre, correo, carrera)
        VALUES ('$cedula', '$nombre', '$correo', '$carrera')";

if ($conexion->query($sql)) {
    echo "Estudiante guardado correctamente.";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
