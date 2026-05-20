<?php
session_start();
session_destroy(); // Menghapus session login
header("Location: index.php"); // Mengarahkan kembali ke halaman login.php
exit;
?>