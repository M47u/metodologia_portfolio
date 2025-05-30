<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario con Base de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Contenedor centrado -->
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container" style="max-width: 500px;">
            <h2 class="mb-4 text-center">Registrar usuario para el Portfolio</h2>
            <form action="../login/guardar_db.php" method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                    <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
                </div>
                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <input type="password" name="contrasena" id="contrasena" class="form-control" required>
                    <div class="invalid-feedback">Por favor ingresa una contraseña.</div>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" name="correo" id="correo" class="form-control" required>
                    <div class="invalid-feedback">Correo inválido.</div>
                </div>
                <button type="submit" class="btn btn-primary w-100"onclick="windows.location.href='../login/ver_usuarios_db.php'">Registrar✅</button>
                
                
            </form><br>
            <a href="../login/ver_usuarios_db.php" class="btn btn-primary w-100">Ver usuarios registrados 📋</a><br><br>
            <a href="../index.php" class="btn btn-primary w-100">Ir al Portfolio 💼</a>
        </div>
    </div>

    <script>
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            forms.forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                });
            });
        })();
    </script>

</body>

</html>