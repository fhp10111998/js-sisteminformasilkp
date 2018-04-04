<?php

include "../koneksi.php";

$id	= $_GET["id_pembayaran"];

$querydata = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id'");
if($querydata == false){
	die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
}
while($data = mysqli_fetch_array($querydata)){

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
						<h4 class="modal-title">Edit Instruktur</h4>
					</div>
					<div class="modal-body">
						<form action="pembayaran_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Id Pembayaran</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="id_pembayaran" type="text" class="form-control" value="<?php echo $data["id_pembayaran"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Bayar</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="tanggal_bayar" type="text" class="form-control" value="<?php echo $data["tanggal_bayar"]; ?>">
									</div>
							</div>
							
							<div class="form-group">
								<label>Jumlah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="jumlah" type="text" class="form-control" value="<?php echo $data["jumlah"]; ?>" onkeypress="return hanyaAngka(event)" maxlength="7"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nis</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="nis_bayar" type="text" class="form-control" value="<?php echo $data["nis_bayar"]; ?>" onkeypress="return hanyaAngka(event)" maxlength="7"/>
									</div>
							</div>
								 <div class="form-group">
          <label for="">Keterangan</label>
          	<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user-o"></i>
				</div>
      <select name="keterangan_bayar" value="" class="form-control">
      <?php
      if ($data['keterangan_bayar']=="Belum Bayar") echo "<option value='Belum Bayar' selected> Belum Bayar </option>";
      else echo "<option value='Belum Bayar'>Belum Bayar</option>";
      if ($data['keterangan_bayar']=="Cicilan") echo "<option value='Cicilan' selected>Cicilan</option>";
      else echo "<option value='Cicilan'>Cicilan</option>";
      if ($data['keterangan_bayar']=="Lunas") echo "<option value='Lunas' selected>Lunas</option>";
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
			<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
			
			
<?php
			}

?>