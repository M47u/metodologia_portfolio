<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ./index.html"); // Redirige si no está logueado
    exit;
}

require_once './login/conexion.php';
$resultado = $conexion->query("SELECT * FROM mensajes ORDER BY fecha_creado DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="jigar sable, portfolio, jigar, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
    <meta name="description" content="Welcome to Jigar's Portfolio. Full-Stack Web Developer and Android App Developer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style-contacto.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="./assets/images/benjadibujo.jpeg" type="image/x-png">
    <title>Administración | Portfolio Benjamin Gonzalez</title>


    <!-- FrontEnd para la tabla, hacer un archivo aparte -->
    <style>
    body {
      margin: 10;
      font-family: 'Lufga', 'Poppins', sans-serif;
      font-size: 16px;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 20px;
    }

    h1 {
      font-size: 3em;
      text-align: center;
      margin-bottom: 40px;
    }

    h1 i {
      margin-left: 10px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 1100px;
      margin-top: 4rem;  
      background-color: #14142b;
      border-radius: 10px;
      overflow: hidden;
      font-size: 1.1rem; 
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }

    th, td {
      padding: 18px 24px;
      text-align: left;
      font-size: 17px;
    }

    th {
      background-color: #1e1e3a;
      color: #fff;
      font-weight: 800;
    }

    tr:nth-child(even) {
      background-color: #1a1a33;
    }

    tr:hover {
      background-color: #292950;
    }

    @media (max-width: 600px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }

      th {
        position: sticky;
        top: 0;
        background-color: #1e1e3a;
      }

      td {
        padding: 10px;
        border-bottom: 1px solid #333;
      }

      tr {
        margin-bottom: 20px;
      }
    }
  </style>
  </head>

  <body oncontextmenu="return false" class="dark-mode">
  <!-- Botón modo oscuro y claro -->
  <button id="themeToggle" class="theme-toggle light" aria-label="Toggle theme">
    <img src="./assets/images/icon-sol.png" alt="Modo claro" id="themeIcon" />
  </button>

  <!-- encabezado -->
  <header>
        <a href="" class="logo"><i class="fab fa-node-js"></i> Benjamin</a>
 
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a href="./login/logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
  </header>
  <!-- encabezado -->

  <!-- sobre el inicio -->
  <section>
    <br><br>
    <h2 class="heading">Panel de <span>Administración</span></h2>

    <table class="">
            <thead class="">
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
                        <td><?= htmlspecialchars($fila['nombre']) ?></td>
                        <td><?= htmlspecialchars($fila['mensaje']) ?></td>
                        <td><?= $fila['telefono'] ?></td>
                        <td><?= $fila['email'] ?></td>
                        <td><?= $fila['fecha_creado'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
    </table>

  </section>

  <!-- scroll vuelta arriba -->
  <a href="#administracion" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
  <!-- scroll vuelta arriba -->

  <!-- ==== JAVASCRIPT ==== -->
  <!-- jquery cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- typed.js cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- particle.js links -->
  <script src="./assets/js/particles.min.js"></script>
  <script src="./assets/js/app.js"></script>

  <!-- vanilla tilt.js links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- scroll reveal anim -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
  ></script>

  <!-- ==== JAVASCRIPT ==== -->
   <script src="./assets/js/mouse.js"></script>
   <script src="./assets/js/script_panel.js"></script>
   <script src="./assets/js/cambiarmodo.js"></script>
</body>
</html>
<?php $conexion->close(); ?>