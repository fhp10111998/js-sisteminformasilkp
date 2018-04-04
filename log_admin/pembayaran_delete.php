<?php
include '../koneksi.php';
$id = $_GET['id_pembayaran'];
if($delete = mysqli_query($koneksi, "DELETE FROM pembayaran WHERE id_pembayaran='$id'")){
	header("location: pembayaran.php");
	exit();

}
?>