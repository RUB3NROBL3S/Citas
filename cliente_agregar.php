<?php
include("./conexion.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['cliente_agregar'])) {
    // ambil data dari form
    $razon = $_POST['razon'];
    $identificacion = $_POST['identificacion'];
    $representante = $_POST['representante'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    // query
    $sql = "INSERT INTO clientes(razon, identificacion, representante, direccion, telefono, correo)
    VALUES('$razon', '$identificacion', '$representante', '$direccion', '$telefono', '$correo')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./clientes.php?status=sukses');
    else
        header('Location: ./clientes.php?status=gagal');
} else
    die("Akses dilarang...");

    ?>