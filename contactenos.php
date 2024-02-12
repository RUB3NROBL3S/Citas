<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contacto Citas Virtual</title>
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
          <li><a href="servicios.php" >Servicios</a></li>
          <li><a href="contactenos.php" class="active">Contáctenos</a></li>
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

  <main id="main">

    <!-- ======= Fondo transparente ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/cta-bg2.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center" data-aos="fade-up">
              <h2>Contáctenos</h2>
              <p>¡Únete a la revolución en la gestión de citas para terminales portuarias y de carga! 
                Contáctanos hoy mismo para descubrir cómo nuestra solución puede transformar las operaciones portuarias y llevarlas al siguiente nivel. 
              </p>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <!-- ======= Formulario de contacto ======= -->      
  
    <section id="ContactUs" class="Contact pt-0">
      <div class="container" data-aos="fade-up">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                   <div class="col-lg-12">
                      <div class="p-5">
                          <div class="text-center">
                              <h3 class="h5 text-gray-900 mb-4">Regístrese y solicite una visita técnica o una cotización de servicio.</h3>
                              <p></p>

                              <form class="user" action="https://formsubmit.co/netsolcol@outlook.com" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" name="Nombre"   id="exampleFirstName"
                                            placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="Apellido" id="exampleLastName"
                                            placeholder="Apellido">
                                    </div>
                                </div>
                                <p></p>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" name="Documento" id="exampleFirstName"
                                            placeholder="CC o NIT">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="Direccion" id="exampleLastName"
                                            placeholder="Dirección">
                                    </div>
                                    <p></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="Correo" id="exampleInputEmail"
                                        placeholder="Correo Electrónico">
                                </div>
                                <p></p>
                                
  
                                <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="Mensaje" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Comentarios</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                    </div>
                              </form>  

                              <form
                                class="d-flex gap-1 justify-content-center mt-1">
                                 <a href="index.php"><input 
                                  type="submit" 
                                   value="Contactenos" 
                                  class="btn btn-primary btn-block"
                                   class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a> 
                              </form>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

  </main><!-- End #main -->

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