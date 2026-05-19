<?php
include 'koneksi.php';
session_start();

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['user'] = $user;
        header("Location: data_diri.php");
    } else {
        echo "<script>alert('Username atau Password Salah!');</script>";
    }
}
?>