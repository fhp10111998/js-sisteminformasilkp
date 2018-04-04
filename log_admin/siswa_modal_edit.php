<?php

include "../koneksi.php";

$nis	= $_GET["nis"];

$querymhs = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
if($querymhs == false){
	
	die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
}
while($mhs = mysqli_fetch_array($querymhs)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Siswa</h4>
					</div>
					<div class="modal-body">
						<form action="siswa_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Nis</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="nis" type="text" class="form-control" value="<?php echo $mhs["nis"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Nama Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nama_siswa" type="text" class="form-control" value="<?php echo $mhs["nama_siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="tanggal_lahir" type="text" class="form-control" value="<?php echo $mhs["tanggal_lahir"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="jk" class="form-control">
											<option value="<?php echo $mhs["jk"]; ?>" selected>
											<?php
												if ($mhs["jk"]=="L"){
													echo "Laki - laki";
												}
												else{
													echo "Perempuan";
												}
											?>
											</option>
											<?php
												if ($mhs["jk"]=="L"){
													echo "<option value='P'>Perempuan</option>";
												}
												else{
													echo "<option value='L'>Laki - laki</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>No. Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="no_telp" type="text" class="form-control" value="<?php echo $mhs["no_telp"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="alamat" type="text" class="form-control" value="<?php echo $mhs["alamat"]; ?>"/>
									</div>
							</div>
								<div class="form-group">
          <label for="">Jurusan</label>
          	<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user-o"></i>
				</div>
      <select name="jurusan" value="" class="form-control">
      <?php
      if ($mhs['jurusan']=="RPL-3") echo "<option value='RPL-3' selected> RPL-3 </option>";
      else echo "<option value='RPL-3'>RPL-3</option>";
      if ($mhs['jurusan']=="TKJ-1") echo "<option value='TKJ-1' selected>TKJ-1</option>";
      else echo "<option value='TKJ-1'>TKJ-1</option>";
      if ($mhs['jurusan']=="TKJ-2") echo "<option value='TKJ-2' selected>TKJ-2</option>";
      else echo "<option value='TKJ-2'>TKJ-2</option>";
      ?>
        </select>
         
        </div>
      </div>
      <div class="form-group">
          <label for="">Keterangan</label>
          	<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user-o"></i>
				</div>
      <select name="keterangan" value="" class="form-control">
      <?php
      if ($mhs['keterangan']=="Belum Bayar") echo "<option value='Belum Bayar' selected> Belum Bayar </option>";
      else echo "<option value='Belum Bayar'>Belum Bayar</option>";
      if ($mhs['keterangan']=="Cicilan") echo "<option value='Cicilan' selected>Cicilan</option>";
      else echo "<option value='Cicilan'>Cicilan</option>";
      if ($mhs['keterangan']=="Lunas") echo "<option value='Lunas' selected>Lunas</option>";
      else echo "<option value='Lunas'>Lunas</option>";
      ?>
        </select>
         
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
			
			
<?php
			}

?>