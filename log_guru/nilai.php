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
  <!-- Library CSS -->
  <?php
    include "bundle_css.php";
  ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
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
              <li><a href="index_guru.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
              <li><a href="instruktur.php"><i class="fa fa-user"></i><span>Instruktur</span></a></li>
              <li><a href="siswa.php"><i class="fa fa-users"></i><span>Siswa Prakerin</span></a></li>
              <li class="active"><a href="#"><i class="fa fa-columns"></i><span>Nilai Siswa</span></a></li>
              
          
         
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
            Nilai
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i> Nilai</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
        <a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
                  <br></br>
                  
          <table id="data" class="table table-bordered table-striped table-scalable">
            <?php
              include "data_nilai.php";
            ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    
    <!-- Modal Popup Dosen -->
    <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Nilai</h4>
          </div>
          <div class="modal-body">
            <form action="nilai_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
              <div class="form-group">
             
                    <input name="id_nilai" type="hidden" class="form-control" placeholder="Id Nilai" required="" />
                  </div>
             
              <div class="form-group">
                <label>Tahun Ajaran</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <input name="TA" type="text" class="form-control" placeholder="Tahun Ajaran" required=""/>
                  </div>
              </div>
              <div class="form-group">
                <label>Nama Instruktur</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <select name="kode_p_n" class="form-control">
                      <?php
                        
                        $querydosen = mysqli_query($koneksi, "SELECT * FROM pembimbing");
                        if($querydosen == false){
                          die ("Terdapat Kesalahan : ". mysqli_error($koneksi));  
                        }
                        while($kode = mysqli_fetch_array($querydosen)){
                          echo "
                            <option value='$kode[kode_p]'>$kode[nama_pem]</option>";
                        }
                      ?>
                    </select>
                  </div>
              </div>
              
              <div class="form-group">
                <label>Nis</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-id-card"></i>
                    </div>
                    <input name="nis_nilai" type="text" class="form-control" placeholder="Nis" required="" id="nis" />
                  </div>
              </div>
              <div class="form-group">
                <label>Nama Siswa</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <input type="text" class="form-control" id="nama" disabled="" name="nama_siswa" />
                  </div>
              </div>
              <div class="form-group">
                <label>Jurusan</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <input type="text" class="form-control" id="jurusan" disabled="" name="jurusan" />
                  </div>
              </div>


              <div class="form-group">
                <label>Nilai Ms Office</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-flag"></i>
                    </div>
                    <input name="ms_office" type="text" class="form-control" placeholder="Ms Office" required=""/>
                  </div>
              </div>
                <div class="form-group">
                <label>Nilai Produktif</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-flag"></i>
                    </div>
                    <input name="produktif" type="text" class="form-control" placeholder="Produktif" required=""/>
                  </div>
              </div>
                <div class="form-group">
                <label>Predikat</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-flag"></i>
                    </div>
                    <input name="predikat" type="text" class="form-control" placeholder="Predikat" required=""/>
                  </div>
              </div>


              <div class="modal-footer">
                <button class="btn btn-success" type="submit">
                  Add
                </button>
                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                  Cancel
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal Popup Dosen Edit -->
    <div id="ModalEditNilai" class="modal fade" tabindex="-1" role="dialog"></div>
    
    <!-- Modal Popup untuk delete--> 
    <div class="modal fade" id="modal_delete">
      <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align:center;">Apakah Anda Yakin Ingin Menghapus Data Ini.. ?</h4>
          </div>    
          <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
            <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    
    </div><!-- /.content-wrapper -->
    <?php
    include "content_footer.php";
  ?>
    </div><!-- ./wrapper -->
  <!-- Library Scripts -->
  <?php
    include "bundle_script.php";
  ?>
  </body>
</html>
