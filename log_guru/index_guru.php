<?php

session_start();
include "../koneksi.php";
include "cek_login.php";
$sqlpem=mysqli_query($koneksi,"SELECT * FROM pembimbing");
$level = mysqli_num_rows($sqlpem);
$sqlsis= mysqli_query($koneksi, "SELECT * FROM siswa");
$levelsis = mysqli_num_rows($sqlsis);
$sqldata= mysqli_query($koneksi, "SELECT * FROM pembayaran");
$leveldata = mysqli_num_rows($sqldata);
$sqluser = mysqli_query($koneksi, "SELECT * FROM user");
$leveluser = mysqli_num_rows($sqluser);
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>LKP UTAMA JAYA</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../aset/foto/lkp.jpg">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
       <link rel="stylesheet" href="../aset/ionicons/css/ionicons.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    
    <div class="wrapper">
      <?php
        include "content_header.php";  
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu">
              <li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
              <li class="active"><a href="#"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
              <li><a href="instruktur.php"><i class="fa fa-user"></i><span>Instruktur</span></a></li>
              <li><a href="siswa.php"><i class="fa fa-users"></i><span>Siswa Prakerin</span></a></li>
              <li><a href="nilai.php"><i class="fa fa-columns"></i><span>Nilai Siswa</span></a></li>
          
          
          
              <li><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i> Dashboard</li>
          </ol>
        </section>
        <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">INSTRUKTUR</span>
          <span class="info-box-number"><?php echo "$level"; ?> <small>DATA</small></span>
        </div><!--.Info-box-content-->
      </div><!-- Info-bos-->
    </div><!-- Col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">SISWA</span>
      <span class="info-box-number"><?php echo "$levelsis"; ?> <small> DATA</small></span>
    </div><!-- /.info-box-content -->
  </div><!-- /.info-box -->
</div><!-- /.col -->
<div class="clearfix visible-sm-block"></div>

<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">PEMBAYARAN</span>
      <span class="info-box-number"><?php echo "$leveldata"; ?> <small> DATA</small></span>
    </div><!-- /.info-box-content -->
  </div><!-- /.info-box -->
</div><!-- /.col -->
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">USER</span>
      <span class="info-box-number"><?php echo "$leveluser"; ?><small> DATA</small></span>
    </div><!-- /.info-box-content -->
  </div><!-- /.info-box -->
</div><!-- /.col -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
					<h1><center><b>Lembaga Kursus Dan Pelatihan Utama Jaya</b></center></h1>
					<center><img src="../aset/foto/lkp.jpg" width="225" height="225" /></center>
					<center><h2><b>Fhp Copyright &copy;  <?php echo date ('Y') ?></b></h2></center>
					<center><h4><b>Made with <strong><i class="fa fa-code"></i></strong> Fikri Haikal Purba </b></h4></center>
                </div><!-- /.box-header -->
                <div class="box-body">
					
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
  </body>
</html>
