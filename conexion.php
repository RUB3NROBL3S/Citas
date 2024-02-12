 <!-- CONEXION BD INICIO DE SESION -->

<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "citas_virtual";

$conn = new mysqli($server, $username, $password, $db);

?>


 <!-- CONEXION BD PARA REGISTROS-->
<?php
    $db="citas_virtual";
    $user="root";
    $host="localhost";
    $clave="";
    $conexion=mysqli_connect('localhost','root','','citas_virtual');
?>

<!-- CONEXION BD PARA CRUD-->
<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "citas_virtual";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db)
    die("Gagal terhubung dengan database: " . mysqli_connect_error());