<?php
session_start();
require_once '../login/conexion.php';
$resultado = $conexion->query("SELECT * FROM usuarios ORDER BY creado_en DESC");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Usuarios - Base de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Usuarios Registrados en la Base de Datos</h2>
        <a href="../login/formulario_db.php" class="btn btn-primary mb-3">← Registrar otro usuario</a>
        <a href="../index.html" class="btn btn-primary mb-3">Ir al Portfolio 💼</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?= $fila['id'] ?></td>
                        <td><?= htmlspecialchars($fila['nombre']) ?></td>
                        <td><?= htmlspecialchars($fila['correo']) ?></td>
                        <td><?= $fila['creado_en'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php $conexion->close(); ?>