<?php
include 'koneksi.php';
session_start();

// Proteksi halaman: Kalau belum login, balikkan ke index.php
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$user_login = $_SESSION['user'];

// Proses Hapus Data jika tombol hapus diklik
if (isset($_GET['hapus'])) {
    $id_hapus = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM users WHERE id='$id_hapus'");
    echo "<script>alert('Data berhasil dihapus!'); window.location='dashboard.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota OSIS SMKN 2</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f8f9fa; /* Abu-abu sangat muda biar mata gak lelah */
            background-image: linear-gradient(rgba(255, 255, 255, 0.45), rgba(255, 255, 255, 0.45)), url('bg-osis.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #333; /* Tulisan utama jadi gelap agar mudah dibaca */
            margin: 0;
            padding: 20px;
        }
        .header-title {
            text-align: center;
            background: #8B0000; /* Merah Tua kokoh */
            color: white;
            padding: 18px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(139, 0, 0, 0.2);
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        .main-card {
            background: white; /* Card dominan putih bersih */
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 1100px;
            margin: auto;
            border-top: 8px solid #8B0000; /* Aksen garis merah tua di atas card */
        }
        .info-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .user-status {
            color: #333;
            font-size: 16px;
            font-weight: 600;
        }
        .user-status span {
            color: white;
            background: #8B0000;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 14px;
        }
        .btn-web {
            background: #8B0000; /* Hijau cerah untuk tombol web */
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            margin-right: 8px;
            transition: 0.3s;
            display: inline-block;
            border: none;
        }
        .btn-web:hover {
            background: #8B0000;
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.2);
        }
        .btn-logout {
            background: #fff;
            color: #8B0000;
            text-decoration: none;
            padding: 8px 18px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
            border: 2px solid #8B0000;
            display: inline-block;
        }
        .btn-logout:hover {
            background: #8B0000;
            color: white;
            box-shadow: 0 4px 12px rgba(139, 0, 0, 0.2);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        th {
            background: #8B0000; /* Header tabel Merah Tua */
            color: white;
            padding: 14px;
            text-align: center;
            font-weight: 600;
        }
        td {
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #eee;
            color: #555;
        }
        tr:nth-child(even) {
            background: #fdfdfd; /* Selang-seling abu tipis */
        }
        tr:hover {
            background: #fff5f5; /* Efek highlight merah muda tipis saat di-hover */
            transition: 0.2s;
        }
        .btn-hapus {
            padding: 6px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            color: white;
            background: #d9534f;
            transition: 0.2s;
            display: inline-block;
            border: none;
        }
        .btn-hapus:hover {
            background: #c9302c;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            color: #888;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <div class="header-title">🦅 DATA PENGURUS OSIS SMKN 2 🦅</div>

    <div class="main-card">
        <div class="info-bar">
            <div class="user-status">Login sebagai : <span><?php echo $user_login; ?></span></div>
            <div>
                <a href="index.html" class="btn-web">Beranda </a>
                <a href="logout.php" class="btn-logout" onclick="return confirm('Yakin ingin keluar?')">Logout</a>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>Nama Lengkap</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Jabatan OSIS</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($conn, "SELECT * FROM users WHERE nama IS NOT NULL AND nama != '' ORDER BY id DESC");
                if (mysqli_num_rows($query) > 0) {
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo htmlspecialchars($data['nama']); ?></td>
                            <td><?php echo htmlspecialchars($data['nis']); ?></td>
                            <td><?php echo htmlspecialchars($data['kelas']); ?></td>
                            <td><?php echo htmlspecialchars($data['jabatan']); ?></td>
                            <td>
                                <a href="dashboard.php?hapus=<?php echo $data['id']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='6' style='color:#999; padding:30px;'>Belum ada data pengurus yang mengisi.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="footer">&copy; 2026 CRUD Biodata Pengurus OSIS SMKN 2</div>
</body>
</html>