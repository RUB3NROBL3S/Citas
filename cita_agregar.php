<?php
include("./conexion.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['cita_agregar'])) {
    // ambil data dari form
    $cliente = $_POST['cliente'];
    $vehiculo = $_POST['vehiculo'];
    $carga = $_POST['carga'];
    $muelle = $_POST['muelle'];
    $fecha = $_POST['fecha'];
    $salida = $_POST['salida'];

    // query
    $sql = "INSERT INTO citas(cliente, vehiculo, carga, muelle, fecha, salida)
    VALUES('$cliente', '$vehiculo', '$carga', '$muelle', '$fecha', '$salida')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./citas.php?status=sukses');
    else
        header('Location: ./citas.php?status=gagal');
} else
    die("Akses dilarang...");

    ?>