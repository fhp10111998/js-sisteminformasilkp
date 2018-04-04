<?php

include "../koneksi.php";

$id 		= $_POST['id_nilai'];
$ta 		= $_POST['TA'];
$kode 		= $_POST['kode_p_n'];
$nis 		= $_POST['nis_nilai'];
$ms 		= $_POST['ms_office'];
$produktif 	= $_POST['produktif'];
$predikat 	= $_POST['predikat'];

if($edit = mysqli_query($koneksi, "UPDATE nilai SET TA='$ta', kode_p_n='$kode', nis_nilai='$nis', 
	ms_office='$ms', produktif='$produktif', predikat='$predikat' WHERE id_nilai='$id'")){
		header("Location: nilai.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($koneksi));

?>