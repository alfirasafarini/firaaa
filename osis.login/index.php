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

<!DOCTYPE html>
<html>
<head>
    <title>Login OSIS SMKN 2</title>
    <style>
    body { 
    font-family: 'Segoe UI', sans-serif; 
    /* Mengambil foto background */
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('bg.osiss.png'); 
    
    /* Agar foto memenuhi layar dan tidak berulang */
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    
    display: flex; 
    justify-content: center; 
    align-items: center; 
    height: 100vh; 
    margin: 0; 
}
    }
    .login-card { 
        background: white; 
        padding: 2.5rem; 
        border-radius: 15px; 
        box-shadow: 0 10px 25px rgba(0,0,0,0.1); 
        width: 320px; 
        border-top: 8px solid #8B0000; /* Merah Tua */
    }
    h2 { 
        color: #8B0000; 
        text-align: center; 
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    input { 
        width: 100%; 
        padding: 12px; 
        margin: 10px 0; 
        border: 1px solid #ddd; 
        border-radius: 8px; 
        box-sizing: border-box; 
    }
    input:focus {
        border-color: #8B0000;
        outline: none;
    }
    button { 
        width: 100%; 
        padding: 12px; 
        background: #8B0000; 
        color: white; 
        border: none; 
        border-radius: 8px; 
        cursor: pointer; 
        font-weight: bold;
        transition: 0.3s; 
    }
    button:hover { 
        background: #a50000; 
        box-shadow: 0 4px 12px rgba(139, 0, 0, 0.3);
    }
</style>
</head>
<body>
    <div class="login-card">
        <h2>LOGIN OSIS</h2>
        <form method="POST">
            <input type="text" name="NIS" placeholder="NIS" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Masuk</button>
        </form>
    </div>
</body>
</html>