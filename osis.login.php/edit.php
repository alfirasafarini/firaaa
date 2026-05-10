<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from tbl_biodata where id='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="proses_edit.php">
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    <input type="text" name="nis" value="<?php echo $d['nis']; ?>">
    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
    <input type="text" name="sekbid" value="<?php echo $d['sekbid']; ?>">
    <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
    <input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>">
    <input type="submit" value="SIMPAN">
</form>
<?php } ?>