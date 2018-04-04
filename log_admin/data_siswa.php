				<thead>
					<tr>
						<th>Nis</th>
						<th>Nama Siswa</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Telpon</th>
						<th style="width: 200px;">Alamat</th>
						<th>Jurusan</th>
						<th>Keterangan</th>
						<th style="width: 60px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymhs = mysqli_query ($koneksi, "SELECT nis, nama_siswa, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir, jk, no_telp, alamat, jurusan, keterangan FROM siswa");
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
									<td>$mhs[keterangan]</td>
									<td>
										<a href='#' class='open_modal' id='$mhs[nis]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"siswa_delete.php?nis=$mhs[nis]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>