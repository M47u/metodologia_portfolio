<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: ../index.html");
  exit;
}

require_once './conexion.php';

// Recolección de datos
$descripcion = $conexion->real_escape_string($_POST['descripcion']);
$email = $conexion->real_escape_string($_POST['correo_personal']);
$sede = $conexion->real_escape_string($_POST['sede']);

$fotoActualizada = false;
$fotoRuta = '';

// Comprobar si ya existe un registro
$existe = $conexion->query("SELECT id FROM informacion_personal LIMIT 1");
if ($existe->num_rows > 0) {
  // Actualizar
  $update = "UPDATE informacion_personal SET descripcion='$descripcion', correo_personal='$email', sede='$sede'";
  $conexion->query($update);
  header("Location: ../panel.php");
} else {
  // Insertar nuevo
  $insert = "INSERT INTO informacion_personal (descripcion, correo_personal, sede";
  $values = ") VALUES ('$descripcion', '$email', '$sede'";
  $conexion->query($insert . $values . ")");
}

$conexion->close();

// Redirigir
