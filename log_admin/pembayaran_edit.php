<?php
include'../koneksi.php';
$id = $_POST['id_pembayaran'];
$tanggal = $_POST['tanggal_bayar'];
$jumlah = $_POST['jumlah'];
$nis = $_POST['nis_bayar'];
$ket = $_POST['keterangan_bayar'];
$dt = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
$data=mysqli_fetch_array($dt);
$keter = $data['keterangan']=$ket;
mysqli_query($koneksi, "UPDATE siswa SET keterangan='$keter' WHERE nis='$nis'");
if($update = mysqli_query($koneksi, "UPDATE pembayaran set tanggal_bayar='$tanggal', jumlah='$jumlah', nis_bayar='$nis', keterangan_bayar='$ket' WHERE id_pembayaran='$id'")){
	header("location: pembayaran.php");
	exit();
}
?>