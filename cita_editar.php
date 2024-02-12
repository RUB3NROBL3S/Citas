<?php
include("./conexion.php");

 // obtener datos del formulario
if (isset($_POST['edit_data'])) {
    $id = $_POST['edit_id'];
    $cliente = $_POST['edit_cliente'];  
    $vehiculo = $_POST['edit_vehiculo'];
    $carga = $_POST['edit_carga'];
    $muelle = $_POST['edit_muelle'];
    $fecha = $_POST['edit_fecha'];
    $salida = $_POST['edit_salida'];

    // consulta de datos
    $sql = "UPDATE citas SET cliente='$cliente', vehiculo='$vehiculo', carga='$carga', muelle='$muelle', fecha='$fecha', salida='$salida' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // comprobar si la consulta se guardó correctamente
    if ($query)
        header('Location: ./citas.php');
    else
        header('Location: ./citas.php');
} else
    die("Akses dilarang...");

