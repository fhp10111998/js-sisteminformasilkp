<?php
include '../koneksi.php';
$user=$_POST['user'];
$lama=md5($_POST['lama']);
$baru=$_POST['baru'];
$ulang=$_POST['ulang'];

$cek=mysqli_query($koneksi,"select * from user where username='$user' and password='$lama'");
// Mengecek Variabel 
//var_dump(mysqli_num_rows($cek)); die();
 //var_dump($lama); die();

if(mysqli_num_rows($cek)>0){

	
	if($baru==$ulang){
		$b=md5($baru);
		mysqli_query($koneksi,"update user set password='$b' where username='$user'");
		 echo "<script>alert('Password Berhasil Di Ubah, Silahkan Login Kembali')</script>";
     echo "<meta http-equiv='refresh' content='0 url=../index.php'>";

	}else{
		 echo "<script>alert('Password Tidak Sama')</script>";
     echo "<meta http-equiv='refresh' content='0 url=ubah_pass.php'>";

	}
}else{
	 echo "<script>alert('Masukkan Password Lama Yang Benar')</script>";
     echo "<meta http-equiv='refresh' content='0 url=ubah_pass.php'>";

}



?>