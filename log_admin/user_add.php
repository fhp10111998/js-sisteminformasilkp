<?php
include "../koneksi.php";
$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
// Rename Nama fotonya Dengan Menambahkan Tanggal Dan Jam Upload 
$fotobaru = date('dmYHis').$foto;
// Set tempat Folder Tempat Menyimpan Fotonya
$path = "../aset/foto/".$fotobaru;

// Proses Upload
if(move_uploaded_file($tmp, $path)) { // Cek Apakah Gambar Berhasil Di upload atau tidak 
	// Proses Upload
$query = "INSERT INTO user VALUES ('".$id."','".$username."','".$password."','".$level."','".$fotobaru."')";
$sql = mysqli_query($koneksi, $query);
if($sql){
	header("location: user.php");
}else{
	die ("Terdapat kesalahan : ". mysqli_error($koneksi));
}
}
?>