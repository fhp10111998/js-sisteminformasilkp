				<thead>
					<tr>
						<th>Nis</th>
						<th>Nama Siswa</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Telpon</th>
						<th>Alamat</th>
						<th>Jurusan</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
						$querymhs = mysqli_query ($koneksi, "SELECT nis, nama_siswa, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir, jk, no_telp, alamat, jurusan FROM siswa");
						if($querymhs == false){
							die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
						}
							
						while ($mhs = mysqli_fetch_array ($querymhs)){
							
							echo "
								<tr>
									<td>$mhs[nis]</td>
									<td>$mhs[nama_siswa]</td>
									<td>$mhs[tanggal_lahir]</td>
									<td>
								";
									if($mhs["jk"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
									<td>$mhs[no_telp]</td>
									<td>$mhs[alamat]</td>
									<td>$mhs[jurusan]</td>
									
									
								</tr>";
						}
					?>
				</tbody>