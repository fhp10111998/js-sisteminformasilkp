<?php

include "../koneksi.php";

$kode	= $_GET["kode_p"];

if($delete = mysqli_query ($koneksi, "DELETE FROM pembimbing WHERE kode_p='$kode'")){
	header("Location: instruktur.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($koneksi));

?>