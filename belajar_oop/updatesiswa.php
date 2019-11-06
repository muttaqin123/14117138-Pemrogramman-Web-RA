<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Siswa</title>
</head>
<body>
<h2>Menu Update Data Siswa</h2>
    <?php  
        include 'class.php';
        $id = $_GET["id"];
        if (isset($_POST['kirim'])) {
            $siswa->UPDATE($_POST['namaa'], $_POST['alamata'], $_FILES['foto'], $id);
            echo "<script>alert('Update Data');</script>";
            echo "<script>location='tampilsiswa.php';</script>";
        }
        $mahasiswa = $siswa->siswa($id);
        foreach ($mahasiswa as $value) {
            $nama = $value['nama'];
            $alamat = $value['alamat'];
        }
    ?>
	<form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" name="namaa" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td><input type="text" name="alamata" value="<?php echo $alamat; ?>"></td>
            </tr>
        </table>

        <br><br>
        <button type="submit" name="update">Update</button>
        <a href="tampilsiswa.php">Kembali</a>
    </form>
<?php
if(isset($_POST['update'])){
    $siswa -> upd_siswa($_POST['namaa'],$_POST['alamata'], $id);
	echo "<script>location='tampilsiswa.php';</script>";
}
?>