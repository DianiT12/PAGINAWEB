<?php
$conexion = new mysqli("localhost", "root", "", "estudiantes");

$id      = $_POST["id"];
$cedula  = $_POST["cedula"];
$nombre  = $_POST["nombre"];
$correo  = $_POST["correo"];
$carrera = $_POST["carrera"];

$sql = "UPDATE alumno SET 
        cedula='$cedula', 
        nombre='$nombre', 
        correo='$correo', 
        carrera='$carrera' 
        WHERE id=$id";

if ($conexion->query($sql)) {
    echo "Estudiante actualizado correctamente.";
} else {
    echo "Error al actualizar: " . $conexion->error;
}

$conexion->close();
?>
