				<thead>
					<tr>
						
						<th>Id</th>
						<th>Username</th>
						<th>Password</th>
						<th>Level</th>
						
					
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymhs = mysqli_query ($koneksi, "SELECT id, username, password, level FROM user");
						if($querymhs == false){
							die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
						}
							
						while ($mhs = mysqli_fetch_array ($querymhs)){
							
							echo "
								<tr>
									<td>$mhs[id]</td>
									<td>$mhs[username]</td>
									<td>$mhs[password]</td>
									<td>$mhs[level]</td>
									
									
									<td>
										<a href='#' class='open_modal' id='$mhs[id]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"user_delete.php?id=$mhs[id]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>