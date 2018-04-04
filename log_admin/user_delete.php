<?php
include "../koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM user Where id='".$id."'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
if(is_file('../aset/foto/'.$data['foto']))
unlink('../aset/foto/'.$data['foto']);
$query2 = "DELETE FROM user WHERE id='".$id."'";
$sql2 = mysqli_query($koneksi, $query2);
if($sql2){
	header('location: user.php');

}else{
	die ("Terdapat kesalahan : ". mysqli_error($koneksi));
}
?>