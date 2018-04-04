<?php
session_start();
include "../koneksi.php";
include "cek_login.php";
?>

<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>LKP UTAMA JAYA</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
  </head>
  <body class="hold-transition lockscreen">
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <b>LKP UTAMA JAYA</b>
       
      </div>
      <!-- User name -->
 
        <form class="lockscreen-credentials" action="ubah_pass_act.php" method="post">
          <div class="form-group">
      <input name="user" type="hidden" value="<?php echo $_SESSION['username']; ?>">
    </div>
    <div class="form-group">
      <label>Password Lama</label>
      <input name="lama" type="password" class="form-control" placeholder="Password Lama ..">
    </div>
    <div class="form-group">
      <label>Password Baru</label>
      <input name="baru" type="password" class="form-control" placeholder="Password Baru ..">
    </div>
    <div class="form-group">
      <label>Ulangi Password</label>
      <input name="ulang" type="password" class="form-control" placeholder="Ulangi Password ..">
    </div>  
    <div class="form-group">
      <label></label>
      <input type="submit" class="" value="Simpan">
      <input type="reset" class="" value="reset">
    </div>            
         
        </form>
</div>
      
	
      <div class="lockscreen-footer text-center">
        <strong>Copyright &copy; <?php echo date("Y") ?> LKP UTAMA JAYA</strong>
      </div>
    </div><!-- /.center -->

    <!-- jQuery 2.1.4 -->
    <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="aset/dist/js/app.min.js"></script>
  </body>
</html>