<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$sekbid = $_POST['sekbid'];
$kelas = $_POST['kelas'];
$no_hp = $_POST['no_hp'];

mysqli_query($koneksi,"update tbl_biodata set nis='$nis', nama='$nama', sekbid='$sekbid', kelas='$kelas', no_hp='$no_hp' where id='$id'");
header("location:index.php");
?>