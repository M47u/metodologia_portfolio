<?php
session_start();
require_once '../login/conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO mensajes (nombre, email, telefono, mensaje) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssss", $nombre, $email, $telefono, $mensaje);

if ($stmt->execute()) {
    echo "ok";
} else {
    http_response_code(500);
    echo "error";
}
 
$stmt->close();
$conexion->close();

?>