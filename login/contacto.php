<?php
//En caso de que hayas cambiado el puerto del Xampp, hay que aclararlo en los parametros
//Quedaria así: ("localhost", "root", "", "portfolio", port:"3307");

//en mi caso tuve que  poner "root" como contraseña
$conexion = new mysqli("localhost", "root", "root", "portfolio");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO mensajes (nombre, email, telefono, mensaje) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssss", $nombre, $email, $telefono, $mensaje);

if ($stmt->execute()) {
    echo "<script>alert('Mensaje enviado correctamente'); window.location.href = '../index.html';</script>";
    exit;
} else {
    echo "<script>alert('Error al enviar el mensaje');</script>";
}
 
$stmt->close();
$conexion->close();

?>