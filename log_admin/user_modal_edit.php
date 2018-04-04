<?php

include "../koneksi.php";

$id	= $_GET["id"];

$querydosen = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
if($querydosen == false){
	die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
}
while($user = mysqli_fetch_array($querydosen)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
   
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Instruktur</h4>
					</div>
					<div class="modal-body">
						<form action="user_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Id</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="id" type="text" class="form-control" value="<?php echo $user["id"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Username</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="username" type="text" class="form-control" value="<?php echo $user["username"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="password" type="password" class="form-control" value="<?php echo $user["password"]; ?>">
									</div>
							</div>
							
							
		<div class="form-group">
          <label for="">Level</label>
          	<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user-o"></i>
				</div>
      <select name="level" value="" class="form-control">
      <?php
      if ($user['level']=="admin") echo "<option value='admin' selected> Admin </option>";
      else echo "<option value='admin'>Admin</option>";
      if ($user['level']=="pembimbing") echo "<option value='pembimbing' selected>pembimbing</option>";
      else echo "<option value='pembimbing'>pembimbing</option>";
      if ($user['level']=="siswa") echo "<option value='siswa' selected>Siswa</option>";
      else echo "<option value='siswa'>Siswa</option>";
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