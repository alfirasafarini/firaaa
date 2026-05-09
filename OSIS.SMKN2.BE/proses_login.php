<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi,
"SELECT * FROM users 
WHERE username='$username' 
AND password='$password'");

if(mysqli_num_rows($query) > 0){

    $data = mysqli_fetch_assoc($query);

    $_SESSION['user_id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    header("Location:index.html");

}else{

    echo "<script>
    alert('Username atau Password salah');
    window.location='login.php';
    </script>";

}
?>