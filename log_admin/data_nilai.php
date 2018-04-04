				<thead>
					<tr>
						<th>Id Nilai</th>
						<th>Tahun Ajaran</th>
						<th>Kode Ins</th>
						<th>Nis</th>
						<th>Nama Siswa</th>
						<th>Ms Office</th>
						<th>Produktif</th>
						<th>Predikat</th>
						<th>Jurusan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querynilai = mysqli_query ($koneksi, "SELECT id_nilai, TA, kode_p_n, nis, ms_office, produktif, predikat, nis_nilai, jurusan, nama_siswa FROM nilai INNER JOIN siswa ON nis_nilai = nis");
						if($querynilai == false){
							die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
						}
						while ($nilai = mysqli_fetch_array ($querynilai)){
							
							echo "
								<tr>
									<td>$nilai[id_nilai]</td>
									<td>$nilai[TA]</td>
									<td>$nilai[kode_p_n]</td>
									<td>$nilai[nis]</td>
									<td>$nilai[nama_siswa]</td>
									<td>$nilai[ms_office]</td>
									<td>$nilai[produktif]</td>
									<td>$nilai[predikat]</td>
									<td>$nilai[jurusan]</td>
									<td>
										<a href='#' class='open_modal' id='$nilai[id_nilai]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"nilai_delete.php?id_nilai=$nilai[id_nilai]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>