<?php
include "../koneksi.php";

$nis 				= $_POST["nis"];
$nama				= $_POST["nama_siswa"];
$tanggal 			= $_POST["tanggal_lahir"];
$jk 				= $_POST["jk"];
$alamat 			= $_POST["alamat"];
$no 				= $_POST["no_telp"];
$jurusan			= $_POST["jurusan"];
$ket			= $_POST["keterangan"];

if ($add = mysqli_query($koneksi, "INSERT INTO siswa (nis, nama_siswa, tanggal_lahir, jk, alamat, no_telp, jurusan, keterangan) VALUES 
	('$nis', '$nama', '$tanggal', '$jk', '$alamat', '$no', '$jurusan', '$ket')")){
		header("Location: siswa.php");
		exit();
	}else{
		 echo "<script>alert('Nis Tidak Boleh Sama')</script>";
      echo "<meta http-equiv='refresh' content='0 url=siswa.php'>";
	}


?>