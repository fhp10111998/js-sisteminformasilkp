<?php
include '../koneksi.php';
$kode_p = $_POST['kode_p'];
$nama = $_POST['nama_pem'];
$tanggal = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$no = $_POST['no_telp'];
$alamat = $_POST['alamat'];
if ($add = mysqli_query($koneksi, "INSERT INTO pembimbing (kode_p, nama_pem, tanggal_lahir, jk, alamat, no_telp) VALUES 
	('$kode_p', '$nama', '$tanggal', '$jk', '$alamat', '$no')")){
		header("Location: instruktur.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($koneksi));

?>