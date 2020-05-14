<?php
$servername = "localhost";
$username = "root";
$password = "Pnb_Sby33";
$dbname = "iot_vokasi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>
