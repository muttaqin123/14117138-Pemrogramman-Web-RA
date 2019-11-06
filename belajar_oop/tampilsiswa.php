<?php
include 'class.php';

$datasiswa = $siswa -> set_siswa();
//print_r($datasiswa);

?>
<table border="1">
<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Foto</th>
	</tr>
</thead>
<tbody>
	<?php
	foreach ($datasiswa as $key => $value) {
	?>
	<tr>
		<td><?php echo $key+=1; ?> </td>
		<td><?php echo $value['nama']; ?></td>
		<td><?php echo $value['alamat']; ?></td>
		<td><?php echo $value['foto']; ?></td>
	</tr>
	<?php } ?>
</tbody>	
</table>
<br>
<form action="tambahsiswa.php">
    <input type ="submit" value="Tambah Data">
</form>
<form action="deletesiswa.php">
    <input type ="submit" value="Hapus Data">
</form>
<a href="updatesiswa.php?id=<?php echo $value['id_siswa']; ?>">Update</a>