<?php
include("./conexion.php");

 // obtener datos del formulario
if (isset($_POST['edit_data'])) {
    $id = $_POST['edit_id'];
    $placa = $_POST['edit_placa'];
    $categoria = $_POST['edit_categoria'];
    $nombre = $_POST['edit_nombre'];
    $documento = $_POST['edit_documento'];

    // consulta de datos
    $sql = "UPDATE vehiculos SET placa='$placa', categoria='$categoria', nombre='$nombre', documento='$documento' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // comprobar si la consulta se guardó correctamente
    if ($query)
        header('Location: ./vehiculos.php');
    else
        header('Location: ./vehiculos.php');
} else
    die("Akses dilarang...");
