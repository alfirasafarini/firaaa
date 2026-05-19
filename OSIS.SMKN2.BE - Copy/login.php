<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login OSIS</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

    background-image:url('bgosis.jpg');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

.login-box{
    width:350px;
    padding:40px;

    background:rgba(116, 0, 0, 0.15);
    backdrop-filter:blur(10px);

    border-radius:20px;

    box-shadow:0 0 20px rgba(0,0,0,0.3);

    color:white;
}

.login-box h1{
    text-align:center;
    margin-bottom:30px;
}

.input-box{
    margin-bottom:20px;
}

.input-box label{
    display:block;
    margin-bottom:8px;
}

.input-box input{
    width:100%;
    padding:12px;

    border:none;
    border-radius:10px;

    outline:none;
}

.btn-login{
    width:100%;
    padding:12px;

    border:none;
    border-radius:10px;

    background:#0d6efd;
    color:white;

    font-size:16px;
    cursor:pointer;

    transition:0.3s;
}

.btn-login:hover{
    background:#0b5ed7;
}

</style>
</head>
<body>

<div class="login-box">

    <h1>ade pusink</h1>

    <form action="proses_login.php" method="POST">

        <div class="input-box">
            <label>NIS</label>
            <input type="text" name="username" required>
        </div>

        <div class="input-box">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit" class="btn-login">
            Login
        </button>

    </form>

</div>

</body>
</html>