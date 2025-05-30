<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="jigar sable, portfolio, jigar, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
    <meta name="description" content="Welcome to Jigar's Portfolio. Full-Stack Web Developer and Android App Developer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="./assets/images/benjadibujo.jpeg" type="image/x-png">
    <title>Administración | Portfolio Benjamin Gonzalez</title>
  </head>

  <body oncontextmenu="return false" class="dark-mode">
  <!-- Botón modo oscuro y claro -->
  <button id="themeToggle" class="theme-toggle light" aria-label="Toggle theme">
    <img src="./assets/images/icon-sol.png" alt="Modo claro" id="themeIcon" />
  </button>

  <!-- encabezado -->
  <header>
        <a href="index.php" class="logo"><i class="fab fa-node-js"></i> Benjamin</a>
 
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a href="index.php">Volver al Portfolio</a></li>
            </ul>
        </nav>
  </header>
  <!-- encabezado -->

  <!-- sobre el inicio -->
  <section class="about" id="administracion">
      <br><br><br><br>
      <h2 class="heading"><i class="fas fa-user-tie"></i> Iniciar <span>Sesión</span> </h2>

    <div class="row1">

    <div class="image_login">
        <img draggable="false" class="tilt" src="./assets/images/cmsoon2.png" alt="">
    </div>
    
    <div class="alerta-form">
    
    <form action="./login/login.php" method="POST" class="needs-validation" novalidate>
    <div class="form-group2">
      <label for="nombre">Usuario</label>
      <input type="text" id="nombre" name="nombre" placeholder="Introducir usuario" required>

      <label for="contrasena">Contraseña</label>
      <input type="password" id="contrasena" name="contrasena" placeholder="Introducir contraseña" required>
      <?php if (isset($_GET['error'])): ?>
                <div class="alerta-login" role="alert">
                    <?php
                    if ($_GET['error'] === 'usuario') {
                        echo 'Usuario incorrecto ⚠';
                    } elseif ($_GET['error'] === 'contrasena') {
                        echo 'Contraseña incorrecta ⚠';
                    }
                    ?>
                </div>
    <?php endif; ?>
      <button type="submit" class="submit-inicio">Iniciar Sesión → </button> <br><br>
    
    </div>
  </form>
  </div>
</div>
  </section>

  <!-- pie de pagina -->
  <!-- <section class="footer" id="info">

  <div class="box-container">

      <div class="box">
          <h3>Benjamin | Portfolio</h3>
          <p> Gracias por visitar mi pagina personal. Contactame por redes sociales. <br/> <br/> 🚀 Siempre en movimiento. ¡Hablemos por el chat!</p>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <p> <i class="fas fa-phone"></i>+54 3704 941573</p>
          <p> <i class="fas fa-envelope"></i>benjamingz@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Formosa, Argentina</p>
          <div class="share">

              <a href="https://www.linkedin.com/in/jigar-sable" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
              <a href="https://github.com/jigar-sable" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
              <a href="mailto:jigarsable21@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
              <a href="https://twitter.com/jigar_sable" class="fab fa-twitter" aria-label="Twitter" target="_blank"></a>
              <a href="https://t.me/lifecode5" class="fab fa-telegram-plane" aria-label="Telegram" target="_blank"></a>
          </div>
      </div>
  </div>

  <h1 class="credit">Diseñado por <i class="fa fa-heart pulse"></i> <a href="https://www.linkedin.com/in/jigar-sable"> Equipo de Benjamin</a></h1>
  </section> -->
  <!-- pie de pagina -->


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
  <script src="./assets/js/script_admin.js"></script>
  <script src="./assets/js/cambiarmodo.js"></script>
</body>
</html>
