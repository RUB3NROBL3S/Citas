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

    <title>Módulo Citas Virtual</title>
    <meta content="" name="Software de agendamiento de citas">

    <!-- Icono de la página-->
    <link href="assets/img/Citas_Icon.png" rel="icon">
    <link href="assets/img/Citas_Icon.png" rel="apple-touch-icon">

    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

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
                    <li><a href="#" class="active">Módulo Citas</a></li>
                    <li><a href="vehiculos.php">Registro de Vehículos</a></li>
                    <li><a href="clientes.php  ">Registro de Clientes</a></li>
                    <li class="nav-item">
                    <li class="nav-item dropdown pe-3">
                    </li>

                    <div class="dropdown">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" data-bs-toggle="dropdown">
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
                    <h1 data-aos="fade-up">Bienvenido al módulo de Citas.</h21>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img " data-aos="zoom-out">
                    <img src="assets/img/Reloj_icon.svg" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>
    </section>

    <body class="bg-light">

        <!-- ======= Formulario de contacto ======= -->
        <div class="container mt-5">
            <!-- AGENDAR NUEVAS CITAS -->
            <!-- Agregar datos -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-dark">INGRESE LOS DATOS REQUERIDOS PARA EL AGENDAMIENTO DE
                        CITAS.</h5>
                </div>

                <div class="card-body">

                    <!-- mostrar mensaje de éxito o error -->
                    <?php if (isset($_GET['status'])): ?>
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

                <!-- Formulario de Citas -->
                <form class="row g-3" action="cita_agregar.php" method="POST">

                    <div class="col-md-6">
                        <label for="cliente" class="form-label">Razón Social del Cliente</label>
                        <select type="text" name="cliente" class="form-control" required>
                            <?php

                            // Consulta SQL para obtener datos de clientes
                            $sql = "SELECT razon FROM clientes";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Mostrar cada cliente como opción en el desplegable
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['razon'] . "'>" . $row['razon'] . "</option>";
                                }
                            } else {
                                echo "<option>No hay clientes disponibles</option>";
                            }
                            ;
                            ?>
                        </select>
                    </div>

<div class="col-md-6">
    <label for="vehiculo" class="form-label">Placa del Vehiculo Autorizado</label>
    <select type="text" name="vehiculo" class="form-control" required>
        <?php

        // Consulta SQL para obtener datos de clientes
        $sql = "SELECT placa FROM vehiculos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar cada cliente como opción en el desplegable
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['placa'] . "'>" . $row['placa'] . "</option>";
            }
        } else {
            echo "<option>No hay vehiculos disponibles</option>";
        }
        ?>
    </select>
</div>

                        <div class="col-md-6">
                            <label for="carga" class="form-label">Tipo de Carga</label>
                            <select type="text" name="carga" class="form-control" id="exampleFirstName"
                                placeholder="carga" required>
                                <option value="Seleccione"></option>
                                <option value="Granel">Granel</option>
                                <option value="Acero">Acero</option>
                                <option value="Hidrocarburo">Hidrocarburo</option>
                                <option value="Coque">Coque</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="muelle" class="form-label">Ingresa al Muelle </label>
                            <select type="text" name="muelle" class="form-control" id="muelle" placeholder="muelle"
                                required>
                                <option value="Seleccione"></option>
                                <option value="Muelle 1">Muelle 1</option>
                                <option value="Muelle 2">Muelle 2</option>
                                <option value="Muelle 3">Muelle 3</option>
                                <option value="Muelle 4">Muelle 4</option>
                            </select>
                        </div>

                        <div div class="col-md-6">
                            <label>Seleccione Fecha de Cita </label>
                            <input type="datetime-local" name="fecha" class="form-control" id="fecha"
                                placeholder="Fecha">
                        </div>

                        <div div class="col-md-6">
                            <label>Seleccione Hora de salida </label>
                            <input type="time" name="salida" class="form-control" id="salida" placeholder="salida">
                        </div>
                        <p></p>
                </div>

                <div class="d-flex gap-1 justify-content-center mt-1">
                    <button type="submit" class="btn btn-primary" value="daftar" name="cita_agregar"><i
                            class="fa fa-plus"></i><span class="ms-2">Agendar Cita</span></button>
                </div>
                <p></p>
                </form>
            </div>
        </div>

        <div class="container mt-5">

            <!-- Tabla de datos Guardados -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-dark">TABLA DE DATOS DE CITAS AGENDADAS.</h5>
                </div>

                <!-- Barra de busqueda -->
                <div class="card-header py-3">
                    <form class="input-group" method="get" action="">
                        <input type="text" class="form-control bg-light border-3 small"
                            placeholder="Buscar Cita por nombre del Cliente..." aria-label="Search"
                            aria-describedby="basic-addon2" name="buscar" title="buscar">
                        <button class="btn btn-primary" type="submit" id="button-addon2"><i
                                class="fa fa-search"></i></button>
                    </form>
                </div>
                <p></p>

                <!-- Funcion de busqueda -->

                <?php
                if (isset($_GET['buscar'])) {
                    $busqueda = $_GET['buscar'];

                    // Consulta SQL para buscar el vehículo por número de placa
                    $sql = "SELECT * FROM citas WHERE cliente LIKE '%$busqueda%'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<div class='table-responsive mb-5 card'>";
                        echo "<div class='card-body'>";
                        echo "<table class='table table-hover align-middle bg-white'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th scope='col' class='text-center'>No</th>";
                        echo "<th scope='col'>Razón Social del Cliente</th>";
                        echo "<th scope='col'>Vehículo Autorizado</th>";
                        echo "<th scope='col'>Carga</th>";
                        echo "<th scope='col'>Muelle</th>";
                        echo "<th scope='col'>Fecha y hora de la Cita</th>";
                        echo "<th scope='col'>Hora de Salida    </th>";
                        echo "<th scope='col' class='text-center'>Acciones</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";

                        // Mostrar los resultados de la búsqueda
                        while ($row = $result->fetch_assoc()) {
                            echo "<div <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button></div>  ";
                            echo "<tr>";
                            echo "<td style='display:none'>" . $row['id'] . "</td>";
                            echo "<td class='text-center'>" . $row['id'] . "</td>";
                            echo "<td>" . $row['cliente'] . "</td>";
                            echo "<td>" . $row['vehiculo'] . "</td>";
                            echo "<td>" . $row['carga'] . "</td>";
                            echo "<td>" . $row['muelle'] . "</td>";
                            echo "<td>" . $row['fecha'] . "</td>";
                            echo "<td>" . $row['salida'] . "</td>";
                            echo "<td class='text-center'>";

                            // boton editar 
                            echo " <!-- Button edit modal -->
                        <button type='button' class='btn btn-primary editButton pad m-1'><span class='bi bi-pencil'></span></button>";

                            // boton borrar
                            echo "
                                    <!-- Button delete modal -->
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
                <?php if (isset($_GET['borrar'])): ?>
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
                <?php if (isset($_GET['update'])): ?>
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
                    echo "<th scope='col'>Razón Social del Cliente</th>";
                    echo "<th scope='col'>Vehiculo Autorizado</th>";
                    echo "<th scope='col'>Carga</th>";
                    echo "<th scope='col'>Muelle</th>";
                    echo "<th scope='col'>Fecha y hora de Cita</th>";
                    echo "<th scope='col'>Hora de salida</th>";
                    echo "<th scope='col' class='text-center'>Acciones</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";

                    $batas = 10;
                    $pagina = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
                    $pagina_awal = ($pagina > 1) ? ($pagina * $batas) - $batas : 0;

                    $previous = $pagina - 1;
                    $next = $pagina + 1;

                    $data = mysqli_query($db, "SELECT * FROM citas");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_pagina = ceil($jumlah_data / $batas);

                    $data_mhs = mysqli_query($db, "SELECT * FROM citas LIMIT $pagina_awal, $batas");
                    $no = $pagina_awal + 1;

                    //$sql = "SELECT * FROM mahasiswa";
                    // $query = mysqli_query($db, $sql);
                    

                    while ($citas = mysqli_fetch_array($data_mhs)) {
                        echo "<tr>";
                        echo "<td style='display:none'>" . $citas['id'] . "</td>";
                        echo "<td class='text-center'>" . $no++ . "</td>";
                        echo "<td>" . $citas['cliente'] . "</td>";
                        echo "<td>" . $citas['vehiculo'] . "</td>";
                        echo "<td>" . $citas['carga'] . "</td>";
                        echo "<td>" . $citas['muelle'] . "</td>";
                        echo "<td>" . $citas['fecha'] . "</td>";
                        echo "<td>" . $citas['salida'] . "</td>";
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
                        echo "<p>Total Citas Agendadas: $jumlah_data </p>";
                    }

                    echo "</div>";
                    ?>
                </div>

                <!-- Paginación -->
                <nav class="mt-5 mb-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" <?php echo ($pagina > 1) ? "href='?pagina=$previous'" : "" ?>><i
                                    class="fa fa-chevron-left"></i></a>
                        </li>
                        <?php
                        for ($x = 1; $x <= $total_pagina; $x++) {
                            ?>
                            <li class="page-item"><a class="page-link" href="?pagina=<?php echo $x ?>">
                                    <?php echo $x; ?>
                                </a></li>
                            <?php
                        }
                        ?>
                        <li class="page-item">
                            <a class="page-link" <?php echo ($pagina < $total_pagina) ? "href='?pagina=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>

                <!-- Modal Edicion-->
                <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1'
                    aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog' style="margin-bottom:100px !important;">
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <a href="#" class="logo d-flex align-items-center">
                                    <img src="assets/img/Reloj_icon2.svg" alt="">
                                </a>
                                <h5 class='modal-title' id='exampleModalLabel'>Datos de la Cita agendada</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal'
                                    aria-label='Close'></button>
                            </div>

                            <?php
                            $sql = "SELECT * FROM citas";
                            $query = mysqli_query($db, $sql);
                            $citas = mysqli_fetch_array($query);
                            ?>

                            <form action='cita_editar.php' method='POST'>
                                <div class='modal-body text-start'>
                                    <input type='hidden' name='edit_id' id='edit_id'>

                                    <div class="col-12 mb-3">
                                        <label for="edit_cliente" class="form-label">Cliente</label>
                                        <select type="text" name="edit_cliente" id="edit_cliente" class="form-control"
                                            required>
                                            <?php

                                            // Consulta SQL para obtener datos de clientes
                                            $sql = "SELECT razon FROM clientes";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                // Mostrar cada cliente como opción en el desplegable
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<option value='" . $row['razon'] . "'>" . $row['razon'] . "</option>";
                                                }
                                            } else {
                                                echo "<option>No hay clientes disponibles</option>";
                                            }
                                            ;
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="edit_vehiculo" class="form-label">Vehiculo Autorizado</label>
                                        <select type="text" name="edit_vehiculo" id="edit_vehiculo" class="form-control"
                                            required>
                                            <?php

                                            // Consulta SQL para obtener datos de clientes
                                            $sql = "SELECT placa FROM vehiculos";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                // Mostrar cada cliente como opción en el desplegable
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<option value='" . $row['placa'] . "'>" . $row['placa'] . "</option>";
                                                }
                                            } else {
                                                echo "<option>No hay vehiculos disponibles</option>";
                                            }

                                            // Cerrar la conexión
                                            $conn->close();
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="edit_carga" class="form-label">Carga</label>
                                        <select type="text" name="edit_carga" class="form-control" id="edit_carga"
                                            required>
                                            <option value="Seleccione"></option>
                                            <option value="Granel">Granel</option>
                                            <option value="Acero">Acero</option>
                                            <option value="Hidrocarburo">Hidrocarburo</option>
                                            <option value="Coque">Coque</option>
                                        </Select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="edit_muelle" class="form-label">Muelle</label>
                                        <select type="text" name="edit_muelle" id="edit_muelle" class="form-control"
                                            id="edit_muelle" required>
                                            <option value="Seleccione"></option>
                                            <option value="Muelle 1">Muelle 1</option>
                                            <option value="Muelle 2">Muelle 2</option>
                                            <option value="Muelle 3">Muelle 3</option>
                                            <option value="Muelle 4">Muelle 4</option>
                                        </Select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="edit_fecha" class="form-label">Hora y Fecha de la cita</label>
                                        <input type="datetime-local" name="edit_fecha" class="form-control"
                                            id="edit_fecha" placeholder="Fecha">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="edit_salida" class="form-label">Hora de Salida</label>
                                        <input type="time" name="edit_salida" class="form-control" id="edit_salida"
                                            placeholder="Fecha">
                                    </div>
                                </div>

                                <div class='modal-footer'>
                                    <button type='submit' name='edit_data' class='btn btn-primary'><span
                                            class='bi bi-pencil'> Editar</span> </button>
                                    <!-- Button printer modal -->
                                    <button type='button' class='btn btn-secondary printButton pad m-1'><span
                                            class='bi bi-printer' onclick="imprimir()"> Imprimir</span> </button>
                                </div>

                                <script>
                                    function imprimir() {

                                        window.print('editModal');
                                    }
                                </script>

                            </form>
                        </div>
                    </div>
                </div>



                <!-- Modal Borrar-->
                <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1'
                    aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>Alerta</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal'
                                    aria-label='Close'></button>
                            </div>


                            <form action='cita_borrar.php' method='POST'>

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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
                crossorigin="anonymous"></script>

            <!-- sweet alert -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            <!-- edit function -->
            <script>
                $(document).ready(function () {
                    $('.editButton').on('click', function () {
                        $('#editModal').modal('show');

                        $tr = $(this).closest('tr');

                        var data = $tr.children("td").map(function () {
                            return $(this).text();
                        }).get();

                        console.log(data);
                        $('#edit_id').val(data[0]);
                        $('#edit_cliente').val(data[2]);
                        $('#edit_vehiculo').val(data[3]);
                        $('#edit_carga').val(data[4]);
                        $('#edit_muelle').val(data[5]);
                        $('#edit_fecha').val(data[6]);
                        $('#edit_salida').val(data[7]);
                    });
                });
            </script>

            <!-- print function -->
            <script>
                $(document).ready(function () {
                    $('.printButton').on('click', function () {
                        $('#printModal').modal('show');

                        $tr = $(this).closest('tr');

                        var data = $tr.children("td").map(function () {
                            return $(this).text();
                        }).get();

                        console.log(data);
                        $('#print_id').val(data[0]);
                        $('#print_cliente').val(data[2]);
                        $('#print_vehiculo').val(data[3]);
                        $('#print_carga').val(data[4]);
                        $('#print_muelle').val(data[5]);
                        $('#print_fecha').val(data[6]);
                        $('#print_salida').val(data[7]);
                    });
                });
            </script>


            <!-- delete function -->
            <script>
                $(document).ready(function () {
                    $('.deleteButton').on('click', function () {
                        $('#deleteModal').modal('show');

                        $tr = $(this).closest('tr');

                        var data = $tr.children("td").map(function () {
                            return $(this).text();
                        }).get();

                        console.log(data);
                        $('#delete_id').val(data[0]);
                    });
                });
            </script>

            <script>
                function clicking() {
                    window.location.href = './citas.php';
                }
            </script>



            <!-- Boton Scroll up -->

            <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

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