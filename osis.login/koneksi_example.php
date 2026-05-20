<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "2526_09db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>