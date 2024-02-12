<?php
include("./conexion.php");

    // Funcion Agregar vehículo
if (isset($_POST['vehiculo_agregar'])) {
    // ambil data dari form
    $placa = $_POST['placa'];
    $categoria = $_POST['categoria'];
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];

    // query
    $sql = "INSERT INTO vehiculos(placa, categoria, nombre, documento)
    VALUES('$placa', '$categoria', '$nombre', '$documento')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./vehiculos.php?status=sukses');
    else
        header('Location: ./vehiculos.php?status=gagal');
} else
    die("Akses dilarang...");

    
    ?>
