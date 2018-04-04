				<thead>
					<tr>
						<th>Kode Instruktur</th>
						<th style="width: 150px;">Instruktur</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Telpon</th>
						<th style="width: 150px;">Alamat</th>
						<th style="width: 100px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querydosen = mysqli_query ($koneksi, "SELECT kode_p, nama_pem, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y')as tanggal_lahir, jk, no_telp, alamat FROM pembimbing");
						if($querydosen == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($dosen = mysqli_fetch_array ($querydosen)){
							
							echo "
								<tr>
									<td>$dosen[kode_p]</td>
									<td>$dosen[nama_pem]</td>
									<td>$dosen[tanggal_lahir]</td>
									<td>
								";
									if($dosen["jk"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
									<td>$dosen[no_telp]</td>
									<td>$dosen[alamat]</td>
									<td>
										<a href='#' class='open_modal' id='$dosen[kode_p]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"instruktur_delete.php?kode_p=$dosen[kode_p]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>