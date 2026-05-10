<?php
$host = "localhost";
$user = "2526_09";      // Username database kamu
$pass = "12345678";     // Password database kamu
$db   = "2526_09db";    // Nama database kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>