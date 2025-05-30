<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: ./index.html"); // Redirige si no está logueado
  exit;
}

require_once './login/conexion.php';
$resultado = $conexion->query("SELECT * FROM mensajes ORDER BY fecha_creado DESC");

$sobremi = $conexion->query("SELECT descripcion, correo_personal, sede FROM informacion_personal LIMIT 1");
$datos = $sobremi->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords"
    content="benjamin gonzalez, portfolio, benjamin, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
  <meta name="description" content="Welcome to benjamin's Portfolio. Full-Stack Web Developer and Android App Developer" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/style-contacto.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Favicon -->
  <link id='favicon' rel="shortcut icon" href="./assets/images/benjadibujo.jpeg" type="image/x-png">
  <title>Administración | Portfolio Benjamin Gonzalez</title>


  <!-- FrontEnd para la tabla, hacer un archivo aparte -->
  <style>
    body {
      margin: 0;
      font-family: 'Lufga', 'Poppins', sans-serif;
      font-size: 16px;
      color: white;
      background-color: #0a0a23;
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: 250px;
      background-color: #1e1e3a;
      padding: 30px;
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-top: 6rem;
    }

    .sidebar button {
      background: #2506ad;
      color: white;
      padding: 10px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    .sidebar button:hover {
      background: #3c3cc5;
      transform: scale(1.02);
    }

    .content {
      flex: 1;
      padding: 40px;
      margin-top: 3rem;
    }

    .heading {
      margin-bottom: 5rem;
      margin-top: 1rem;
    }

    .tabla-scroll {
      max-height: 400px;
      overflow-y: auto;
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }

    table {
      border-collapse: separate;
      border-spacing: 0;
      width: 100%;
      background-color: #14142b;
      font-size: 1.1rem;
    }

    thead th {
      position: sticky;
      top: 0;
      z-index: 2;
      background-color: #2506ad;
      color: #fff;
      font-weight: 800;
      padding: 18px 24px;
      text-align: left;
    }

    .nombre {
      text-transform: capitalize;
    }

    tbody td {
      padding: 18px 24px;
      font-size: 17px;
    }

    tbody tr:nth-child(even) {
      background-color: #1a1a33;
    }

    tbody tr:hover {
      background-color: #292950;
    }

    .hidden {
      display: none;
    }

    form label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    form input,
    form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      background-color: #1a1a33;
      color: white;
      border: none;
      border-radius: 5px;
    }

    form button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #2506ad;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>

<body oncontextmenu="return false" class="dark-mode">

  <!-- encabezado -->
  <header>
    <a href="" class="logo"><i class="fab fa-bootstrap"></i> Benjamin</a>

    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
      <ul>
        <li><a href="./login/logout.php">Cerrar Sesión</a></li>
      </ul>
    </nav>
  </header>
  <!-- encabezado -->

  <!-- sobre el inicio -->
  <div class="sidebar">
    <button onclick="mostrarSeccion('mensajes')"><i class="fas fa-envelope"></i> Mensajes</button>
    <button onclick="mostrarSeccion('editar')"><i class="fas fa-user-edit"></i></i> Editar Sobre Mí</button>
  </div>

  <div class="content">
    <h2 class="heading"><i class="fas fa-cogs"></i> Panel de <span>Administración</span></h2>

    <div id="mensajes" class="seccion">
      <div class="tabla-scroll">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Mensaje</th>
              <th>Teléfono</th>
              <th>Correo</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($fila = $resultado->fetch_assoc()): ?>
              <tr>
                <td><?= $fila['id'] ?></td>
                <td class="nombre"><?= htmlspecialchars($fila['nombre']) ?></td>
                <td><?= htmlspecialchars($fila['mensaje']) ?></td>
                <td><?= $fila['telefono'] ?></td>
                <td><?= $fila['email'] ?></td>
                <td><?= date('d/m/Y H:i', strtotime($fila['fecha_creado'])) ?></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>

    <div id="editar" class="seccion hidden">
      <form action="./login/editar_about.php" method="POST" enctype="multipart/form-data">
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" rows="6"
          required><?= htmlspecialchars($datos['descripcion']) ?></textarea>

        <label for="email">Email:</label>
        <input type="email" name="correo_personal" id="email" value="<?= htmlspecialchars($datos['correo_personal']) ?>" required>

        <label for="sede">Sede:</label>
        <input type="text" name="sede" id="sede" value="<?= htmlspecialchars($datos['sede']) ?>" required>

        <button type="submit">Guardar Cambios</button>
      </form>
    </div>
  </div>

  <script>
    function mostrarSeccion(seccionId) {
      document.querySelectorAll('.seccion').forEach(div => div.classList.add('hidden'));
      document.getElementById(seccionId).classList.remove('hidden');
    }
  </script>
</body>

</html>
<?php $conexion->close(); ?>