<?php
include '../koneksi.php';
$id = $_GET['id_nilai'];
if($delete = mysqli_query($koneksi, "DELETE FROM nilai WHERE id_nilai='$id'")){
	header("location: nilai.php");
	exit();

}
?>