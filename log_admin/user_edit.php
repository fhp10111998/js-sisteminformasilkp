<?php
include '../koneksi.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

if($edit = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', level='$level' WHERE id='$id'")){
	header("location: user.php");
	exit();
}
die("Terjadi Kesalahan: ".mysqli_error($koneksi));
?>