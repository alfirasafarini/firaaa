<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:login.php?pesan=belum_login");
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard OSIS</title>
</head>
<body>
    <h2>Halo, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="logout.php">LOGOUT</a> | <a href="tambah.php">+ TAMBAH DATA</a>
    <br><br>
    <table border="1">
        <tr>
            <th>No</th><th>NIS</th><th>Nama</th><th>Sekbid</th><th>Kelas</th><th>No HP</th><th>Opsi</th>
        </tr>
        <?php 
        $no = 1;
        $data = mysqli_query($koneksi,"select * from tbl_biodata");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nis']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['sekbid']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>