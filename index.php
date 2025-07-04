<?php
session_start();
require_once './login/conexion.php';
$resultado = $conexion->query("SELECT * FROM informacion_personal");

// Obtener resultado
$descripcion = "";
$correo = "";
$sede = "";
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $descripcion = $fila["descripcion"];
    $correo = $fila["correo_personal"];
    $sede = $fila["sede"];
} else {
    $descripcion = "descripcion no redactada";
    $correo = "correo no establecido";
    $sede = "sede no establecida";
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="jigar sable, portfolio, jigar, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
    <meta name="description" content="Bienvenidos al portfolio de Benja. Full-Stack Web Developer and Android App Developer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="./assets/images/benjadibujo.jpeg" type="image/x-png">
    <title>Portfolio | Benjamin Gonzalez</title>
  </head>

  <body oncontextmenu="return false" class="dark-mode">
  <!-- Botón modo oscuro y claro -->
  <button id="themeToggle" class="theme-toggle light" aria-label="Toggle theme">
    <img src="assets/images/icon-sol.png" alt="Modo claro" id="themeIcon" />
  </button>

  <!-- encabezado -->
  <header>
        <a href="index.php" class="logo"><i class="fab fa-node-js"></i> Benjamin</a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a class="active" href="#home">Inicio</a></li>
            <li><a href="#about">Sobre mi</a></li>
            <li><a href="#skills">Habilidades</a></li>
            <li><a href="#education">Educación</a></li>
            <li><a href="#work">Proyectos</a></li>
            <li><a href="#experience">Experiencias</a></li>
            <li><a href="#contact">Contacto</a></li>
            </ul>
        </nav>
  </header>
  <!-- encabezado -->

  <!-- sección DE INICIO -->
  <section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <h2>Hola! <br/> Soy <span> Benjamin Gonzalez</span></h2>
    <p>Especializado en <span class="typing-text"></span></p>
    <a href="#about" class="btn"><span>Sobre mi</span>
      <i class="fas fa-arrow-circle-down"></i>
    </a>
    <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/benjamin-gaston-gonzalez-054a78247/" target="_blank"><i class="fab fa-linkedin"></i></a></li> 
          <li><a class="github" aria-label="GitHub" href="https://github.com/benjagonz1" target="_blank"><i class="fab fa-github"></i></a></li>
          <li><a class="twitter" aria-label="Twitter" href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a class="telegram" aria-label="Telegram" href="https://t.me" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
          <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com"><i class="fab fa-instagram" target="_blank"></i></a></li>
        </ul>
      </div>
    </div>
<div class="image">
    <img draggable="false" class="tilt" src="./assets/images/abt.jpg" alt="">
</div>
  </section>
  <!-- hero section ends -->


  <!-- sobre el inicio -->
  <section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> Sobre <span> mi</span></h2>
    
    <div class="row">

    <div class="image">
        <img draggable="false" class="tilt" src="./assets/images/cmsoon2.png" alt="">
    </div>
    <div class="content">
        <h3>Soy Benjamin</h3>
        <span class="tag"> Desarrollador web</span>
        <!-- la siguiente linea es para incrustar un parrafo  que es le resultado de una consulta sql-->
        <p><?php echo htmlspecialchars($descripcion); ?></p>
        <!-- <p>Programador especializado en crear soluciones digitales completas, desde el diseño de interfaces intuitivas hasta la lógica y la arquitectura que las hace funcionar. Combinando creatividad y funcionalidad para desarrollar plataformas escalables, modernas y fáciles de usar. Me apasiona convertir ideas en experiencias digitales reales, limpias y accesibles. </p> -->
        
        <div class="box-container">
            <div class="box">
                <!-- en esta parte traemos el email y la sede desde la tabla informacion personal -->
              <p><span> Email : </span> <?php echo htmlspecialchars($correo); ?></p>
              <p><span> Sede: </span> <?php echo htmlspecialchars($sede); ?></p>
            </div>
        </div>
        
        <div class="resumebtn">
            <a href="https://drive.google.com/file/d/1_SJxiEbLSiD-7oPI3LjqB_VuKuI3Addn/view" target="_blank" class="btn"><span>Ver CV</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
    </div>
  </section>
  <!-- sobre el inicio -->

  <!-- SECCION HABILIDADES -->
  <section class="skills" id="skills">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Habilidades <span> y Talentos</span></h2>

    <div class="container">
          <div class="row" id="skillsContainer">

      </div>
</div>
  </section>
  <!-- SECCION HABILIDADES -->

  <!-- educacion -->
  <section class="education" id="education">
    <h1 class="heading"><i class="fas fa-graduation-cap"></i> Mi <span>Educación</span></h1>
    <div class="box-container">

    <div class="box">
        <div class="image">
        <img draggable="false" src="./assets/images/educat/utn.jpg" alt="">
        </div>
        <div class="content">
        <h3>Universidad Tenologica Nacional</h3>
        <p>Tecnicatura en Programacion</p>
        <h4>2024-2025</h4>
        </div>
    </div>

  </section>
  <!-- educacion -->


  <!--proyectos -->
  <section class="work" id="work">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Mis <span> Proyectos </span></h2>

    <div class="box-container">
    </div>

  </section>
  <!--proyectos -->

  <!-- Experiencias -->
  <section class="experience" id="experience">

  <h2 class="heading"><i class="fas fa-briefcase"></i> Experiencias </h2>

  <div class="timeline">

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>Banco de Formosa</h2>
        </div>
        <div class="desc">
            <h3>Aplicación onda movil</h3>
            <p>Octubre 2021</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>APA supermercados</h2>
        </div>
        <div class="desc">
            <h3>Sistema de stock</h3>
            <p>Junio 2022</p>
        </div>
      </div>
    </div>
    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>Hospital Evita</h2>
        </div>
        <div class="desc">
            <h3>Gestión de turnos</h3>
            <p>Abril 2023</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Turismo</h2>
        </div>
        <div class="desc">
            <h3>Pagina web para el festival</h3>
            <p>Marzo 2025</p>
        </div>
      </div>
    </div>
  </div>

</div>

  </section>
  <!-- Experiencias -->

  <!-- contacto -->
   <!-- contact section starts -->
<section class="contact" id="contact">
  
  <h2 class="heading"><i class="fas fa-headset"></i> Estemos en <span>Contacto</span></h2>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img draggable="false" src="./assets/images/contact1.png" alt="">
      </div>
    <form action="./login/contacto.php" method="POST" id="contactForm">
      
      <div class="form-group">
        <div class="field">
          <input type="text" name="nombre" placeholder="Nombre" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Correo Electrónico" required>
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="text" name="telefono" placeholder="Teléfono">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="message">
        <textarea placeholder="Escribí tu mensaje..." name="mensaje" required></textarea>
        <i class="fas fa-comment-dots"></i>
        </div>
        </div>
      <div class="button-area">
        <button type="submit">
          Enviar <i class="fa fa-paper-plane"></i></button>
      </div>
      <div id="mensajeConfirmacion" role="alert"></div>
    </form>
  </div>
  </div>
</section>

<!-- contact section ends -->

  <!-- pie de pagina -->
  <section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>Benjamin | Portfolio</h3>
          <p> Gracias por visitar mi pagina personal. Contactame por redes sociales. <br/> <br/> 🚀 Siempre en movimiento. ¡Hablemos por el chat!</p>
      </div>

      <div class="box">
          <h3>Acceso rápido </h3>
          <!-- <a href="#home"><i class="fas fa-chevron-circle-right"></i>inicio</a>-->
          <a href="#about"><i class="fas fa-chevron-circle-right"></i>   Sobre mi</a>
          <a href="#skills"><i class="fas fa-chevron-circle-right"></i>   Habilidades</a>
          <a href="#education"><i class="fas fa-chevron-circle-right"></i>   Educación</a>
          <a href="#work"><i class="fas fa-chevron-circle-right"></i>   Proyectos </a>
          <a href="#experience"><i class="fas fa-chevron-circle-right"></i>   Experiencias</a>
      </div>

      <div class="box">
          <h3>Contacto</h3>
          <p> <i class="fas fa-phone"></i>+54 3704 941573</p>
          <p> <i class="fas fa-envelope"></i>benjamingz@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Formosa, Argentina</p>
          <div class="share">

              <a href="https://www.linkedin.com/in/benjamin-gaston-gonzalez-054a78247" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
              <a href="https://github.com/benjagonz1" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
              <a href="mailto:gast.ben99@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
              <a href="https://twitter.com" class="fab fa-twitter" aria-label="Twitter" target="_blank"></a>
              <a href="https://t.me" class="fab fa-telegram-plane" aria-label="Telegram" target="_blank"></a>
          </div>
      </div>
  </div>

  <h1 class="credit">Diseñado por <i class="fa fa-heart pulse"></i> <a href="https://www.linkedin.com/in/benjamin-gaston-gonzalez-054a78247"> Equipo de Benjamin</a></h1>

  </section>
  <!-- pie de pagina -->


  <!-- scroll vuelta arriba -->
  <a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
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
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/cambiarmodo.js"></script>
  <script src="./assets/js/mensaje.js"></script>
</body>
</html>
