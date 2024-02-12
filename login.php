<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Iniciar Sesión</title>
  <meta content="" name="Software de agendamiento de citas">

  <!-- Icono de la página-->
  <link href="assets/img/Citas_Icon.png" rel="icon">
  <link href="assets/img/Citas_Icon.png" rel="apple-touch-icon">

  <!-- Fuentes de Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Archivos CSS de Bootstrap -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Plantilla CSS principal -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

<!-- ======= Cabecera de la página ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/Citas Icon logo.png" alt="">
        <h1> CITAS VIRTUAL </h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
     
      <!-- Barra de navegación superior  -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="contactenos.php">Contáctenos</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <!-- ======= Menú de la página======= -->
<main id="main">

    <!-- ======= Fondo transparente======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/cta-bg2.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
            <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
            <div class="container">
            <div class="form-box box">
            <div class="text-center">
             <h3 class="text-white">INICIAR SESIÓN</h3>
            </div>

      <?php
      include "conexion.php";

      if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "select * from users where email='$email'";

        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {

          $row = mysqli_fetch_assoc($res);

          $password = $row['password'];

          $decrypt = password_verify($pass, $password);


          if ($decrypt) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("location: citas.php");


          } else {
            echo "<div class='message'>
                    <p></p>
                    <p>La contraseña ingresada no es correcta</p>
                    <p>Intente acceder nuevamente con sus credenciales. </p>
                    <p>Si no está registrado:</p>
                    <p>Pongase en contacto con el administrador.</p>
                    <p></p>
                    </div><br>";
                    

            echo "<a href='login.php'><button class='btn btn-primary btn-block'>Iniciar Sesión</button></a>";
          }

        } else {
          echo "<div class='message'>
                    <p></p>
                    <p>Correo o Contraseña Incorrecta</p>
                    <p>Intente acceder nuevamente con sus credenciales. </p>
                    <p>Si no está registrado:</p>
                    <p> Pongase en contacto con el administrador.</p>
                    <p></p>
                    </div><br>";
                    

            echo "<a href='login.php'><button class='btn btn-primary btn-block'>Iniciar Sesión</button></a>";

        }


      } else {


        ?>
        <hr>



        
        <form action="#" method="POST">
          <div class="form-group">
            <div class="input-container">
              <input class="form-control" type="email" placeholder="Ingrese su correo electrónico" name="email">
            </div>
            <p> </p>

            <div class="input-container">
              <input class="form-control" type="password" placeholder="Contraseña" name="password">
            </div>

            <div class="d-flex gap-1 justify-content-center mt-4">
            <div class="text-white"> ¿No está registrado? </div>  
            <a href="contactenos.php" class="text-white"
              >- Contáctenos</a>
          </div>
          <p> </p>
          </div>

          <input type="submit" name="login" id="submit" value="iniciar Sesión" class="btn btn-primary btn-block">
        </form>
      </div>
      <?php
      }
      ?>
  </div>
  <script>
    const toggle = document.querySelector(".toggle"),
      input = document.querySelector(".password");
    toggle.addEventListener("click", () => {
      if (input.type === "password") {
        input.type = "text";
        toggle.classList.replace("fa-eye-slash", "fa-eye");
      } else {
        input.type = "password";
      }
    })
  </script>
</main><!-- FIn del menú de la página -->


<!-- Pie de la página -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.php" class="logo d-flex align-items-center">
          <span>Citas Virtual</span>
        </a>
        <p>Contáctanos a través de nuestras redes sociales y mantente al día con nuestros avances, noticias, promociones y descuentos especiales preparados para ti.</p>
        <div class="social-links d-flex mt-4">
          <a href="https://twitter.com/?lang=es" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://web.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://co.linkedin.com/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6 footer-links">
        <h4>Enlaces de la página</h4>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="contactenos.php">Contáctenos</a></li>
          <li><a>® Copyright - All Rights Reserved</a></li>
        </ul>
      </div>
      
      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contáctenoss</h4>
        <p>
          C.C. Parque Central  <br>
          Barranquilla, Colombia<br>
          <strong>Teléfono:</strong> +57 329 592 1599<br>
          <strong>Email:</strong> servicioalcliente@citasvirtual.com<br>
        </p>
      </div>
    </div>
  </div>

</footer>


<!-- Fin del pie de página -->

<!-- Boton Scroll up -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>