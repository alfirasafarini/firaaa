
<h1>Form HTML Dengan PHP</h1>
<form action="proses.php" method="get">
	<div>
		<label>Nama</label><input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div>
		<label>Email</label><input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
	</div>
    <div>
		<label>Makanan Favorite</label><input type="text" name="makanan favorite" value="<?=isset($_POST['makanan favorite']) ? $_POST['makanan favorite'] : ''?>"/>
	</div>
	<input type="submit" name="submit" value="Simpan"/>
</form>
<?php
if (isset($_POST['submit'])) {
	echo 'Nama Anda             : ' . $_POST['nama'] . '<br/>';
	echo 'Email Anda            : ' . $_POST['email'] . '<br/>';
    echo 'Makanan favorite anda : ' .$_POST['makanan favorite'] ;
    }?>