<?php
include '../koneksi.php';
$id = $_POST['id_pembayaran'];
$tanggal = $_POST['tanggal_bayar'];
$jumlah = $_POST['jumlah'];
$nis = $_POST['nis_bayar'];
$ket = $_POST['keterangan_bayar'];
$dt = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
$data=mysqli_fetch_array($dt);
$keter = $data['keterangan']=$ket;
mysqli_query($koneksi, "UPDATE siswa SET keterangan='$keter' WHERE nis='$nis'");

if ($add = mysqli_query($koneksi, "INSERT INTO pembayaran (id_pembayaran, tanggal_bayar, jumlah, nis_bayar, keterangan_bayar) VALUES('$id', '$tanggal', '$jumlah', '$nis', '$ket')")){
		header("Location: pembayaran.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($koneksi));

?>