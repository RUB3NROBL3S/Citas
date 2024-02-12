<?php
include("./conexion.php");

if (isset($_POST['deletedata'])) {
    // ambil id dari query string
    $id = $_POST['delete_id'];

    // query hapus
    $sql = "DELETE FROM vehiculos WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // apa query berhasil dihapus?
    if ($query) {
        header('Location: ./vehiculos.php?borrar=sukses');
    } else
        die('Location: ./vehiculos.php?borrar=gagal');
} else
    die("akses dilarang...");
