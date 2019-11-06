<h2>Menu Hapus Data Siswa</h2>
<form method="POST" enctype=multipart/form-data>
	<label>Nama</label>
	<input type="text" name="nm"><br><br>
	<button type="submit" name="hapus">Hapus</button>
</form>

<?php
include 'class.php';
if(isset($_POST['hapus'])){
    $siswa -> del_siswa($_POST['nm']);
	echo "<script>alert('data terhapus');</script>";
	echo "<script>location='tampilsiswa.php';</script>";
}
?>