<?php
require_once '../login/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['nombre'] ?? '';
    $pass = $_POST['contrasena'] ?? '';
    $correo = $_POST['correo'] ?? '';

    // Hashear la contraseña
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $user, $correo, $hash);
        $stmt->execute();
        $stmt->close();
        $_SESSION['usuario'] = $user;
        header("Location: ../login/ver_usuarios_db.php");
    }

    $conexion->close();
}
