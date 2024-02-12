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
          <li><a href="index.php" >Inicio</a></li>
          <li><a href="servicios.php" class="active">Servicios</a></li>
          <li><a href="contactenos.php">Contáctenos</a></li>
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

 <!-- ======= Menú de la página======= -->
  <main id="main">

     <!-- ======= Fondo transparente======= -->
    <div class="breadcrumbs" >
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/cta-bg2.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center" data-aos="fade-up">
              <h2>Nuestros Servicios</h2>
            <p>Nuestro software de agendamiento de citas ofrece una gama completa de servicios para simplificar la reserva de citas. Desde la comodidad de tu dispositivo, puedes programar citas con solo unos clics, seleccionar el horario y servicio deseado, recibir recordatorios automáticos y gestionar tu agenda con facilidad. Además, el sistema incluye funcionalidades de parqueadero, permitiéndote reservar espacios de estacionamiento asociados a tu cita, asegurando así una experiencia integral y sin contratiempos desde la planificación hasta la llegada al lugar de la cita.</p>
            </div>
          </div>
        </div>
      </div>
      <section id="about" class="about pt-0">
        <div class="container" data-aos="fade-up">
  
          <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            </div>
            <div class="col-lg-6 content order-last  order-lg-first"> 
    </div>

    
    <!-- ======= Seccion de servicios ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">

              <!-- Primer servicio -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/storage-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a class="stretched-link">Almacenes</a></h3>
              <p>Facilita la organización de servicios como atención al cliente o consultas especializadas al programar citas, reduciendo tiempos de espera y optimizando recursos. Esto mejora la experiencia del cliente al ofrecer un servicio más ágil y personalizado, fortaleciendo la relación y fidelidad hacia la cadena.</p>
            </div>
          </div>

              <!-- Segundo servicio -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/logistics-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a  class="stretched-link">Puertos Marítimos</a></h3>
              <p>Gestione eficazmente la llegada y salida de vehiculos, así como la programación de servicios de cargue y descargue en operaciones portuarias. Esta herramienta facilita la coordinación de actividades, asignación de espacios de atraque y programación de servicios de carga y descarga, optimizando así la eficiencia operativa del puerto. Además, agiliza la comunicación entre diferentes partes involucradas, mejorando la planificación y reduciendo los tiempos de espera, lo que resulta crucial en entornos portuarios donde la puntualidad es esencial.</p>
            </div>
          </div>

             <!-- Tercer servicio -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/trucking-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a class="stretched-link">Transportistas</a></h3>
              <p>Coordine y optimice la logística de sus envíos. Facilita la programación de entregas y recogidas, ayudando a evitar congestiones en almacenes y puertos. Esto reduce los tiempos de espera, optimiza la planificación de rutas y recursos, y mejora la eficiencia en la distribución de la carga. Además, proporciona visibilidad en tiempo real, permitiendo una gestión más ágil y precisa de las operaciones de transporte.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- ======= Sección de Preguntas frecuentes ======= -->
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Preguntas Frecuentes</span>
          <h2>Preguntas Frecuentes</h2>
          <p> Consulta nuestra sección de Preguntas Frecuentes, para obtener respuestas a las consultas comunes sobre el uso del software. En caso de requerir una capacitación de uso, contactar con nuestra Mesa de servicio a través de la extensión 200, marcando desde nuestro PBX en Barranquilla +57 329 592 1599</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <!-- # 1 Pregunta-->  
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Cómo puedo adquirir el software de agendamiento de citas?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nuestro software de agendamiento para terminales portuarios está disponible para adquisición a través de nuestro sitio web oficial. Puedes solicitar una demostración o contactar a nuestro equipo de ventas para obtener más información sobre licencias y precios.
                  </div>
                </div>
              </div>

              <!-- # 2 Pregunta-->  
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Qué opciones de soporte ofrecen para este software?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Ofrecemos un soporte integral que incluye asistencia en línea, atención telefónica y documentación detallada. Nuestro equipo de soporte técnico está disponible para resolver cualquier inconveniente y proporcionar orientación en el uso del software en horario 24/7.
                  </div>
                </div>
              </div>

              <!-- # 3 Pregunta-->  
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Cómo puedo iniciar sesión en el software de agendamiento de citas?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Para iniciar sesión, debes acceder a nuestra plataforma a través de la página de inicio de sesión en nuestro sitio web. Allí podrás ingresar tu nombre de usuario y contraseña proporcionados al momento de la adquisición del software.
                  </div>
                </div>
              </div>

              <!-- # 4 Pregunta-->  
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Qué debo hacer si olvido mi contraseña para acceder al software ?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    En caso de olvidar tu contraseña, puedes utilizar la opción de "Recuperar contraseña" en la página de inicio de sesión. Esto te guiará para restablecer tu contraseña a través de un correo electrónico seguro y verificado.
                  </div>
                </div>
              </div>

              <!-- # 5 Pregunta-->  
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Dónde puedo contactar al equipo de soporte o servicio al cliente en relación al software de agendamiento de citas?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Puedes contactarnos directamente a través de nuestra línea telefónica de soporte al cliente, o mediante correo electrónico. También puedes encontrar información de contacto en nuestra página web oficial bajo la sección "Contáctenos".
                    Estamos disponibles para ayudarte en cualquier momento.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </section>

  </main>


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