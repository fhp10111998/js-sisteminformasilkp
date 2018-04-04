<?php

include "../koneksi.php";

$nis = $_GET["nis"];

if($delete = mysqli_query($koneksi, "DELETE FROM siswa WHERE nis='$nis'")){
	header("Location: siswa.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($koneksi));

?>