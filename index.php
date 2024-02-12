<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Software Citas Virtual</title>
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
          <li><a href="index.php" class="active">Inicio</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="contactenos.php">Contactenos</a></li>
          <form
            class="d-flex gap-1 justify-content-center mt-1">
            <a 
            href="login.php"><input 
            type="button" 
            value="Iniciar sesión" 
            class="btn btn-primary btn-block"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a> 
          </form>
        </ul>
      </nav>

    </div>
  </header>

  <!-- ======= Banner de Bienvenida ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Bienvenido a Citas Virtual su aliado en logística.</h2>
          <p data-aos="fade-up" data-aos-delay="100">Gestiona tus citas, clientes y ventas en un solo lugar y mantente siempre informado del estado de tu negocio. 
            | Disminuya las inasistencias y aumentae sus ingresos. | Todo el control de tu negocio con una sola herramienta. </p>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.png" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section>

    <!-- ======= Sección de Resumen de Servicios  ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
            <div>
              <h4 class="title">Optimice tiempos de entrega</h4>
              <p class="description">Disminuir el tiempo promedio de espera de vehículos a los terminales portuarios, maximiza el tiempo de actividad de carga y descarga, mejorando la productividad general de su negocio. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
            <div>
              <h4 class="title">Controle el uso de sus Vehiculos</h4>
              <p class="description">El sistema autorizado de citas le permitirá tener un acceso más controlado y seguro, reduciendo la presencia de vehículos no autorizados y fortaleciendo la seguridad perimetral.</p> 
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
            <div>
              <h4 class="title">Asegure su carga</h4>
              <p class="description">Aumentante la eficiencia operativa y refuerce la seguridad de su carga, así impactará positivamente en la experiencia de todos los involucrados en las actividades portuarias.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Sección "SOBRE NOSOTROS" ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/Citas_Icon_2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>Sobre Nosotros</h3>
            <p>Proporcionamos soluciones integrales y personalizadas que garanticen la efectividad y rentabilidad para nuestros clientes. Nos comprometemos a ofrecer asesoría experta y orientación continua, asegurando que cada solución tecnológica se adapte a las necesidades específicas de cada cliente. Buscamos no solo desarrollar software de calidad, sino también ser socios estratégicos, brindando una asesoría cercana y proactiva que permita maximizar la rentabilidad y el éxito en el uso de nuestros servicios.
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Infraestructura de punta</h5>
                  <p>Sómos líderes en el país, siendo reconocidos por llevar la tecnología más avanzada a todos los sectores de la sociedad.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Crecimiento contínuo</h5>
                  <p>El compromiso nos guía a dedicar nuestros mejores esfuerzos para superar las expectativas de nuestros clientes, manteniendo un alto nivel de profesionalismo y ética en todo momento.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Conectividad 24/7</h5>
                  <p>Nuestra plataforma online con acceso seguro, le permite estar conectado desde cualquier dispositivo en red.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>

  <!-- ======= Pie de página ======= -->
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

    

  </footer><!-- Fin del pie de página -->

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