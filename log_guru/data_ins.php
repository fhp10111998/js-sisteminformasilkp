				<thead>
					<tr>
						<th>Kode Ins</th>
						<th>Instruktur</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th style="width: 150px;">Telpon</th>
						<th style="width: 200px;">Alamat </th>
						
					</tr>
				</thead>
				<tbody>
					<?php
						$querydosen = mysqli_query ($koneksi, "SELECT kode_p, nama_pem, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y')as tanggal_lahir, jk, no_telp, alamat FROM pembimbing");
						if($querydosen == false){
							die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
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
									
								</tr>";
						}
					?>
				</tbody>