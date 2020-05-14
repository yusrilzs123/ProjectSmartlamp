<?php

$server = "localhost";
$user = "root";
$password = "Pnb_Sby33";
$nama_database = "iot_vokasi";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>