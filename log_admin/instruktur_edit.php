<?php
include '../koneksi.php';
$kode_p = $_POST['kode_p'];
$nama = $_POST['nama_pem'];
$tanggal = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no = $_POST['no_telp'];

if($edit = mysqli_query($koneksi, "UPDATE pembimbing SET nama_pem='$nama', tanggal_lahir='$tanggal', jk='$jk', alamat='$alamat', no_telp='$no' WHERE kode_p='$kode_p'")){
	header("location: instruktur.php");
	exit();
}
die("Terjadi Kesalahan: ".mysqli_error($koneksi));
?>