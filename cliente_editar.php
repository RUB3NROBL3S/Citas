<?php
include("./conexion.php");

 // obtener datos del formulario
if (isset($_POST['edit_data'])) {
    $id = $_POST['edit_id'];
    $razon = $_POST['edit_razon'];
    $identificacion = $_POST['edit_identificacion'];
    $representante = $_POST['edit_representante'];
    $direccion = $_POST['edit_direccion'];
    $telefono = $_POST['edit_telefono'];
    $correo = $_POST['edit_correo'];

    // consulta de datos
    $sql = "UPDATE clientes SET razon='$razon', identificacion='$identificacion', representante='$representante', direccion='$direccion', telefono='$telefono', correo='$correo' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // comprobar si la consulta se guardó correctamente
    if ($query)
        header('Location: ./clientes.php');
    else
        header('Location: ./clientes.php');
} else
    die("Akses dilarang...");

