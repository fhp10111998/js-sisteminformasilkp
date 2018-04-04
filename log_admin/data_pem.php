				<thead>
					<tr>
						<th>Id</th>
						<th>Tanggal Bayar</th>
						<th>Jumlah</th>
						<th>Nis</th>
						<th>Nama Siswa</th>
						
						
						<th style="width: 120px;">Keterangan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querydata = mysqli_query ($koneksi, "SELECT id_pembayaran, tanggal_bayar, jumlah, nis_bayar, keterangan_bayar, nis, nama_siswa, keterangan FROM pembayaran INNER JOIN siswa ON nis_bayar = nis");
						if($querydata == false){
							die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
						}
							
						while ($data = mysqli_fetch_array ($querydata)){
							
							echo "
								<tr>
									<td>$data[id_pembayaran]</td>
									<td>$data[tanggal_bayar]</td>
									<td>$data[jumlah]</td>
									<td>$data[nis_bayar]</td>

									<td>$data[nama_siswa]</td>
									<td>$data[keterangan_bayar]</td>
									
									<td>
										<a href='#' class='open_modal' id='$data[id_pembayaran]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"pembayaran_delete.php?id_pembayaran=$data[id_pembayaran]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>