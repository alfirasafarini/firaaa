<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['user'])) { header("Location: login.php"); }

if (isset($_POST['simpan'])) {
    $user = $_SESSION['user'];
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];
    $jabatan = $_POST['jabatan'];

    $update = mysqli_query($conn, "UPDATE users SET nama='$nama', nis='$nis', kelas='$kelas', jabatan='$jabatan' WHERE username='$user'");
    if ($update) { echo "<script>alert('Data Berhasil Disimpan!'); window.location='dashboard.php';</script>"; }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Isi Data Diri</title>
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
    .container { 
        max-width: 450px; 
        background: white; 
        margin: auto; 
        padding: 35px; 
        border-radius: 15px; 
        box-shadow: 0 10px 30px rgba(0,0,0,0.1); 
    }
    h2 { 
        color: #8B0000; 
        border-bottom: 3px solid #8B0000; 
        padding-bottom: 10px; 
        text-align: center;
    }
    label { 
        display: block; 
        margin-top: 15px; 
        font-weight: 600; 
        color: #444; 
    }
    input, select { 
        width: 100%; 
        padding: 12px; 
        margin-top: 8px; 
        border: 1px solid #ccc; 
        border-radius: 8px; 
        box-sizing: border-box;
    }
    input:focus, select:focus {
        border-color: #8B0000;
        outline: none;
    }
    .btn { 
        margin-top: 25px; 
        background: #8B0000; 
        color: white; 
        border: none; 
        padding: 14px; 
        width: 100%; 
        border-radius: 8px; 
        font-weight: bold;
        cursor: pointer; 
        font-size: 16px;
        transition: 0.3s;
    }
    .btn:hover { 
        background: #a50000; 
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(139, 0, 0, 0.3);
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Lengkapi Data Diri</h2>
        <form method="POST">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" required>
            <label>NIS</label>
            <input type="number" name="nis" required>
            <label>Kelas</label>
            <input type="text" name="kelas" placeholder="Contoh: XI TKJ 2" required>
            <label>Jabatan di OSIS</label>
            <select name="jabatan">
                <option>Ketua</option>
                <option>Wakil Ketua</option>
                <option>Sekretaris</option>
                <option>Bendahara</option>
                <option>Anggota Sekbid</option>
            </select>
            <button type="submit" name="simpan" class="btn">Simpan & Masuk ke Website</button>
        </form>
    </div>
</body>
</html>