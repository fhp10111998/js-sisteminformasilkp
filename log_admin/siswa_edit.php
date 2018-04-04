<?php

include "../koneksi.php";

$nis 				= $_POST["nis"];
$nama				= $_POST["nama_siswa"];
$tanggal			= $_POST["tanggal_lahir"];
$jk					= $_POST["jk"];
$no					= $_POST["no_telp"];
$alamat				= $_POST["alamat"];
$jurusan			= $_POST["jurusan"];
$ket			= $_POST["keterangan"];


if($edit = mysqli_query($koneksi, "UPDATE siswa SET nama_siswa='$nama', tanggal_lahir='$tanggal', jk='$jk', 
	no_telp='$no', alamat='$alamat', jurusan='$jurusan', keterangan='$ket' WHERE nis='$nis'")){
		header("Location: siswa.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($koneksi));

?>