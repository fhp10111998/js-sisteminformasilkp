<?php
include "koneksi.php";
session_start();
if(isset($_POST['username']) && ($_POST['password'])){

$error='';
if(isset($_POST['login'])){
	$username = mysqli_real_escape_string($koneksi, $_POST['username']);
	$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
	
	if (mysqli_num_rows($query) == 0) {
	 echo "<script languange='JavaScript'>alert('Anda Gagal Login'); document.location='index.php';
	 </script>";
    
	}else{
		$row = mysqli_fetch_array($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['level']=$row['level'];
		$_SESSION["foto"]= $row["foto"];
		$_SESSION["Login"] 	= true;

		if($row['level'] == "admin"){
			header("location: log_admin/index_admin.php");

		}
		else if($row['level'] == "pembimbing"){
			header("location: log_guru/index_guru.php");
		}
		else if($row['level'] == "siswa"){
			header("location: log_siswa/index_siswa.php");

		}
		else{
			$error = "Failed Login";

		}
	}

}
}
?>