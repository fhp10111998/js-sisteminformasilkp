<?php
include '../koneksi.php';
$id = $_POST['id_nilai'];
$ta = $_POST['TA'];
$kode = $_POST['kode_p_n'];
$nis = $_POST['nis_nilai'];
$ms = $_POST['ms_office'];
$produktif = $_POST['produktif'];
$predikat = $_POST['predikat'];

if ($add = mysqli_query($koneksi, "INSERT INTO nilai (id_nilai, TA, kode_p_n, nis_nilai, ms_office, produktif, predikat) VALUES('$id', '$ta', '$kode', '$nis', '$ms', '$produktif', '$predikat')")){
		header("Location: nilai.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($koneksi));

?>