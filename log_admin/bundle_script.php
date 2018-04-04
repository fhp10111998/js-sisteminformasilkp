
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
	<!-- Daterange Picker -->
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/select2/select2.full.min.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		$('#Tanggal_Lahir').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		
		  // Data Table
        $("#data").dataTable({
			scrollX: true
		});		
      });
    </script>

	<!-- Date Time Picker -->
	<script>
		$(function (){
			$('#Jam_Mulai').datetimepicker({
				format: 'HH:mm'
			});
			
			$('#Jam_Selesai').datetimepicker({
				format: 'HH:mm'
			});
		});
	</script>
	
	<!-- Javascript Edit--> 
	<script type="text/javascript">
		$(document).ready(function () {
		
		// Dosen
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "instruktur_modal_edit.php",
					type: "GET",
					data : {kode_p: m,},
					success: function (ajaxData){
					$("#ModalEditDosen").html(ajaxData);
					$("#ModalEditDosen").modal('show',{backdrop: 'true'});
					}
				});
			});
		
		// Mahasiswa
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "siswa_modal_edit.php",
					type: "GET",
					data : {nis: m,},
					success: function (ajaxData){
					$("#ModalEditSiswa").html(ajaxData);
					$("#ModalEditSiswa").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Pembayaran
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "pembayaran_modal_edit.php",
					type: "GET",
					data : {id_pembayaran: m,},
					success: function (ajaxData){
					$("#modaleditpembayaran").html(ajaxData);
					$("#modaleditpembayaran").modal('show',{backdrop: 'true'});
					}
				});
			});

		// User
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "user_modal_edit.php",
					type: "GET",
					data : {id: m,},
					success: function (ajaxData){
					$("#ModalEditUser").html(ajaxData);
					$("#ModalEditUser").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		
			
		
		// Nilai
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "nilai_modal_edit.php",
					type: "GET",
					data : {id_nilai: m,},
					success: function (ajaxData){
					$("#ModalEditNilai").html(ajaxData);
					$("#ModalEditNilai").modal('show',{backdrop: 'true'});
					}
				});
			});
		});
	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>
		<script>
		$(function() {
			$("#nis").change(function(){
				var nis = $("#nis").val();
 
				$.ajax({
					url: 'proses.php',
					type: 'POST',
					dataType: 'json',
					data: {
						'nis': nis
					},
					success: function (siswa) {
						$("#nama").val(siswa['nama_siswa']);
						$("#no").val(siswa['no_telp']);
						$("#keterangan").val(siswa['keterangan']);

 
						
					}
				});
			});
 
			
				
			});
	
	</script>
	<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>