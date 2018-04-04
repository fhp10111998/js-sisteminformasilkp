
<?php
include '../koneksi.php';
 
$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='".mysqli_escape_string($koneksi, $_POST['nis'])."'");
$data = mysqli_fetch_array($query);
 
echo json_encode($data);