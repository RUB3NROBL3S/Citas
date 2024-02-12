<?php include("./conexion.php"); ?>

<?php
session_start();

include("conexion.php");

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clientes Citas Virtual</title>
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

      <a href="#" class="logo d-flex align-items-center">
        <img src="assets/img/Citas Icon logo.png" alt="">
        <h1> CITAS VIRTUAL </h1>
      </a>

      <!-- Barra de navegación superior  -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="citas.php" >Módulo Citas</a></li>
          <li><a href="vehiculos.php">Registro de Vehículos</a></li>
          <li><a href="#" class="active" >Registro de Clientes</a></li>
          <li class="nav-item">
          <li class="nav-item dropdown pe-3">
          </li>
                            
          <div class="dropdown">
              <a class="nav-link nav-profile d-flex align-items-center pe-0"         data-bs-toggle="dropdown">
              <img src="assets/img/user-icon/Admin-1.jpg" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block ps-2"></span>
              </a>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                   <li class="dropdown-header">
                     <h6>Desarrollador Jr.</h6>
                   </li>

                <li>
                  <hr class="dropdown-divider">
                </li>

                  <li>
                    <?php
                      $id = $_SESSION['id'];
                      $query = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

                      while ($result = mysqli_fetch_assoc($query)) {
                      $res_username = $result['username'];
                      $res_email = $result['email'];
                      $res_id = $result['id'];
                      }
                      ?>
                  </li>

                <li><a class="dropdown-item" href="logout.php">
                      <i class="bi bi-box-arrow-right"></i>Cerrar Sesión
                  </a>
                </li>
              </ul>
          </div>

                </li>
                  <div class="name">
                        <center class="text-white">
                              <?php
                               // echo $_SESSION['valid'];
                                   echo $_SESSION['username'];
                              ?>
                        </center>
                  </div>
        </ul>
      </nav>
    </div>
    
  </header>

  <!-- ======= Banner de Bienvenida ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Bienvenido al módulo de Registro de Clientes.</h21>
          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img " data-aos="zoom-out">
            <img src="assets/img/client_icon.svg" class="img-fluid mb-3 mb-lg-0"  alt="">
          </div>

      </div>
    </div>
  </section>
<body class="bg-light">
   


    <div class="container mt-5">
        <!-- AGREGAR NUEVOS CLIENTES -->
            <!-- Agregar datos -->
            <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h5 class="m-0 font-weight-bold text-dark">INGRESE LOS DATOS REQUERIDOS PARA EL REGISTRO DE CLIENTES.</h5>
                       </div>
                       
            <div class="card-body" >
               
                <!-- mostrar mensaje de éxito o error -->
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Datos agregados exitosamente!</strong>
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong> Error al agregar datos!</strong>
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>

                <!-- Formulario Clientes -->
                <form class="row g-3" action="cliente_agregar.php" method="POST">

                    <div class="col-md-6">
                        <label for="razon" class="form-label">Razón Social</label>
                        <input type="text" name="razon" class="form-control" required>
                    </div>  
                    <div class="col-md-6">
                        <label for="identificacion" class="form-label">Identificación</label>
                        <input type="text" name="identificacion" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="representante" class="form-label">Nombre del representante Legal</label>
                        <input type="text" name="representante" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" name="direccion" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" name="telefono" class="form-control" required>
                    </div>  
                    <div class="col-md-6">
                        <label for="correo" class="form-label">Correo electrónico</label>
                        <input type="text" name="correo" class="form-control" required>
                    </div>
                    <p></p>

                    <div class="d-flex gap-1 justify-content-center mt-1">
                        <button type="submit" class="btn btn-primary" value="daftar" name="cliente_agregar"><i class="fa fa-plus"></i><span class="ms-2">Agregar Cliente</span></button>
                    </div>
                </form>   
            </div>
        </div>


        <!-- Tabla de datos Guardados -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-dark">TABLA DE DATOS DE CLIENTES REGISTRADOS.</h5>
            </div>
          
            <!-- Barra de busqueda -->
            <div class="card-header py-3">
                <form class="input-group"  method="get" action="">
                    <input type="text" class="form-control bg-light border-3 small" placeholder="Buscar Cliente por Razón Social..." aria-label="Search" aria-describedby="basic-addon2" name="buscar" title="buscar">
                    <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                </form>
            </div>            
            <p></p>


            <!-- Funcion de busqueda -->

            <?php
            if (isset($_GET['buscar'])) 
            {
                $busqueda = $_GET['buscar'];

                // Consulta SQL para buscar el vehículo por número de placa
                $sql = "SELECT * FROM clientes WHERE razon LIKE '%$busqueda%'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='table-responsive mb-5 card'>";
                    echo "<div class='card-body'>";
                    echo "<table class='table table-hover align-middle bg-white'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th scope='col' class='text-center'>No</th>";
                    echo "<th scope='col'>Razón Social</th>";
                    echo "<th scope='col'>Identificación</th>";
                    echo "<th scope='col'>Representante</th>";
                    echo "<th scope='col'>Dirección</th>";
                    echo "<th scope='col'>Teléfono</th>";
                    echo "<th scope='col'>Correo Electrónico</th>";
                    echo "<th scope='col' class='text-center'>Acciones</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";

                    // Mostrar los resultados de la búsqueda
                    while($row = $result->fetch_assoc()) {
                        echo "<div <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button> </div>";
                        echo "<tr>";
                        echo "<td style='display:none'>" . $row['id'] . "</td>";
                        echo "<td class='text-center'>" . $row['id'] . "</td>";
                        echo "<td>" . $row['razon'] . "</td>";
                        echo "<td>" . $row['identificacion'] . "</td>"; 
                        echo "<td>" . $row['representante'] . "</td>";
                        echo "<td>" . $row['direccion'] . "</td>";
                        echo "<td>" . $row['telefono'] . "</td>";
                        echo "<td>" . $row['correo'] . "</td>";
                        echo "<td class='text-center'>";

                        // boton editar 
                        echo " <!-- Button edit modal -->
                        <button type='button' class='btn btn-primary editButton pad m-1'><span class='bi bi-pencil'></span></button>";

                        // boton borrar
                        echo "
                                    <!-- Button trigger modal -->
                                    <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='bi bi-trash'></span></button>";
                        echo "</td>";

                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                    echo "</div>";
                } else {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>No se encontraron resultados para la búsqueda. </strong> 
                    <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }
            }
            ?>


            <!-- Mensaje de borrado exitoso -->
            <?php if (isset($_GET['borrar'])) : ?>
                <?php
                if ($_GET['borrar'] == 'sukses')
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>Datos eliminados exitosamente!</strong> 
                            <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                else
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>No se pudieron eliminar los datos!</strong> 
                            <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                ?>
            <?php endif; ?>

            <!-- Mensaje de edición exitoso -->
            <?php if (isset($_GET['update'])) : ?>
                <?php
                if ($_GET['update'] == 'sukses')
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>Datos actualizados exitosamente!</strong> 
                            <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                else
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Los datos no se pudieron actualizar!</strong> 
                            <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                ?>
            <?php endif; ?>


               
            <!-- Tabla Responsive -->
            <div class="table-responsive mb-5 card">
                <?php
                echo "<div class='card-body'>";

                echo "<table class='table table-hover align-middle bg-white'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th scope='col' class='text-center'>No</th>";
                echo "<th scope='col'>Razón Social</th>";
                echo "<th scope='col'>Identificación</th>";
                echo "<th scope='col'>Representante</th>";
                echo "<th scope='col'>Dirección</th>";
                echo "<th scope='col'>Teléfono</th>";
                echo "<th scope='col'>Correo electrónico</th>";
                echo "<th scope='col' class='text-center'>Acciones</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                $batas = 10;
                $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                $pagina_awal = ($pagina > 1) ? ($pagina * $batas) - $batas : 0;

                $previous = $pagina - 1;
                $next = $pagina + 1;

                $data = mysqli_query($db, "SELECT * FROM clientes");
                $jumlah_data = mysqli_num_rows($data);
                $total_pagina = ceil($jumlah_data / $batas);

                $data_mhs = mysqli_query($db, "SELECT * FROM clientes LIMIT $pagina_awal, $batas");
                $no = $pagina_awal + 1;

                 //$sql = "SELECT * FROM mahasiswa";
                // $query = mysqli_query($db, $sql);


                while ($clientes = mysqli_fetch_array($data_mhs)) {
                    echo "<tr>";
                    echo "<td style='display:none'>" . $clientes['id'] . "</td>";
                    echo "<td class='text-center'>" . $no++ . "</td>";
                    echo "<td>" . $clientes['razon'] . "</td>";
                    echo "<td>" . $clientes['identificacion'] . "</td>";
                    echo "<td>" . $clientes['representante'] . "</td>";
                    echo "<td>" . $clientes['direccion'] . "</td>";
                    echo "<td>" . $clientes['telefono'] . "</td>";
                    echo "<td>" . $clientes['correo'] . "</td>";
                    echo "<td class='text-center'>";

                    // boton editar 
                    echo " <!-- Button edit modal -->
                    <button type='button' class='btn btn-primary editButton pad m-1'><span class='bi bi-pencil'></span></button>";

                    // boton borrar
                    echo "
                                <!-- Button trigger modal -->
                                <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='bi bi-trash'></span></button>";
                    echo "</td>";

                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
                if ($jumlah_data == 0) {
                    echo "<p class='text-center'>Tidak ada data yang tersedia pada tabel ini</p>";
                } else {
                    echo "<p>Total Clientes Registrados: $jumlah_data </p>";
                }

                echo "</div>";
                ?>
        </div>

        <!-- Pagiación -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina > 1) ? "href='?pagina=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_pagina; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina < $total_pagina) ? "href='?pagina=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edicion-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar Datos del Cliente</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM clientes";
                    $query = mysqli_query($db, $sql);
                    $clientes = mysqli_fetch_array($query);
                    ?>

                    <form action='cliente_editar.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_id' id='edit_id'>

                            <div class="col-12 mb-3">
                                <label for="edit_razon" class="form-label">Razón Social</label>
                                <input type="text" name="edit_razon" id="edit_razon" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_identificacion" class="form-label">Identificacion</label>
                                <input type="text" name="edit_identificacion" id="edit_identificacion" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="representante" class="form-label">Representante Legal</label>
                                <input type="text" name="edit_representante" id="edit_representante"class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" name="edit_direccion" id="edit_direccion" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" name="edit_telefono" id="edit_telefono" class="form-control" required>
                            </div>  
                            <div class="col-12 mb-3">
                                <label for="correo" class="form-label">Correo electrónico</label>
                                <input type="text" name="edit_correo" id="edit_correo" class="form-control" required>
                            </div>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn btn-primary'>Editar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Borrar-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Alerta</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='cliente_borrar.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>¿Estás seguro de que deseas eliminar estos datos?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-primary'>Borrar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_id').val(data[0]);
                $('#edit_razon').val(data[2]);
                $('#edit_identificacion').val(data[3]);
                $('#edit_representante').val(data[4]);
                $('#edit_direccion').val(data[5]);
                $('#edit_telefono').val(data[6]);
                $('#edit_correo').val(data[7]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './clientes.php';
        }
    </script>



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