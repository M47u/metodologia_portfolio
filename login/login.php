<?php
session_start();
require_once '../login/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    $stmt = $conexion->prepare("SELECT contrasena FROM usuarios WHERE nombre = ?");
    if ($stmt) {
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $hash = $row['contrasena'];

            if (password_verify($contrasena, $hash)) {
                $_SESSION['usuario'] = $nombre;
                header("Location: ../panel.php");
                exit;
            } else {
                header("Location: ../login_admin.php?error=contrasena");
                exit;
            }
        } else {
            header("Location: ../login_admin.php?error=usuario");
            exit;
        }
    }

    $stmt->close();
    $conexion->close();
}
