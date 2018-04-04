
<?php

include "../koneksi.php";

$id	= $_GET["id_nilai"];

$querynilai = mysqli_query($koneksi, "SELECT id_nilai, TA, kode_p_n, nis, ms_office, produktif, predikat, nis_nilai, jurusan, nama_siswa FROM nilai INNER JOIN siswa ON nis_nilai = nis WHERE id_nilai='$id'");
if($querynilai == false){
	die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
}
while($data = mysqli_fetch_array($querynilai)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Nilai Siswa</h4>
					</div>
					<div class="modal-body">
						<form action="nilai_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Id Nilai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="id_nilai" type="text" class="form-control" value="<?php echo $data["id_nilai"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Tahun Ajaran</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="TA" type="text" class="form-control" value="<?php echo $data["TA"]; ?>">
									</div>
							</div>
							
							<div class="form-group">
								<label>Instruktur</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-users"></i>
										</div>
										<select name="kode_p_n" class="form-control">
										<?php
										
											$querynilaimhs = mysqli_query($koneksi, "SELECT kode_p_n, kode_p, nama_pem FROM nilai INNER JOIN pembimbing ON kode_p_n=kode_p WHERE id_nilai='$id'");
											if($querynilaimhs == false){
												die("Terdapat Kesalahan : ". mysqli_query($koneksi));
											}
											while($nilaimhs = mysqli_fetch_array($querynilaimhs)){
												echo "<option value='$nilaimhs[kode_p_n]' selected>$nilaimhs[nama_pem]</option>";
											}
											
											$querymhs = mysqli_query($koneksi, "SELECT * FROM pembimbing");
											if($querymhs == false){
												die("Terdapat Kesalahan : ". mysqli_error($koneksi));
											}
											while($mhs = mysqli_fetch_array($querymhs)){
												if($mhs["kode_p"] != $data["kode_p_n"]){
													echo "<option value='$mhs[kode_p]'>$mhs[nama_pem]</option>";
												}
											}
										?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Nis</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="nis_nilai" type="text" class="form-control" value="<?php echo $data["nis_nilai"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
                <label>Nama Siswa</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <input type="text" class="form-control" id="nama" disabled="" name="nama_siswa" value="<?php echo $data["nama_siswa"]; ?>" />
                  </div>
              </div>
              <div class="form-group">
                <label>Jurusan</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <input type="text" class="form-control" id="jurusan" disabled="" name="jurusan" value="<?php echo $data["jurusan"]; ?>" />
                  </div>
              </div>


             <div class="form-group">
				<label>Nilai MS OFfice</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
					<input name="ms_office" type="text" class="form-control" value="<?php echo $data["ms_office"]; ?>">
				</div>
				</div>
                <div class="form-group">
                <label>Nilai Produktif</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-flag"></i>
                    </div>
                    <input name="produktif" type="text" class="form-control" placeholder="Produktif" required="" value="<?php echo $data["produktif"]; ?>">
                  </div>
              </div>
                <div class="form-group">
                <label>Predikat</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-flag"></i>
                    </div>
                    <input name="predikat" type="text" class="form-control" placeholder="Predikat" required="" value="<?php echo $data["predikat"]; ?>" />
                  </div>
              </div>

							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
	<?php
	include 'bundle_script';
	?>

			
			
<?php
		}
?>
