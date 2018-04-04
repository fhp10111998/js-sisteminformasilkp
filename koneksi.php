<?php
$koneksi = mysqli_connect("localhost", "root", "", "lkputamajaya");
if (mysqli_connect_errno()) {
	printf("Gagal Terkoneksi : ".mysqli_connect_error());
	exit();

}
?>