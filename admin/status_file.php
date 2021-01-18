<?php include('../server/koneksi.php'); ?>
<table class="table table-condensed">
			<tr>
			<th>Foto</th>
				<th>Title</th>
				<th>Nama Mahasiswa</th>
				<th>NIM Mahasiswa</th>
                <th>view</th>
                <th>Status</th>
				<th>Action</th>
			</tr>
			<?php 
			$data = mysqli_query($connection,"SELECT * FROM `tiga_dimensi` ORDER BY `id_project` DESC");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td>
					<?php 
						$image_path = "../assets/img/portfolio/".$d['gambar'];
						if (file_exists($image_path)) {
						?>
						 <img src="../assets/img/portfolio/<?php echo $d['gambar'] ?>" width="100" height="100">
						<?php 
						} else { ?>
						
							<img src="../assets/img/no_imag.png" width="100" height="100">
						
					<?php
						}
					?>
					
					</td>
					<td><?php echo $d['title']; ?></td>
					<td><?php echo $d['nama_mhs']; ?></td>
					<td><?php echo $d['nim_mhs']; ?></td>
                    <td><a href="3d.php?id=<?php echo $d['id_project']; ?>"><i class="fa fa-eye fa-2x"></i></a></td>
					<td>
					<?php if($d['status'] == 'Diserahkan'){ ?>
							<p class="bg-success"><?php echo $d['status']; ?> </p>
					<?php }else if($d['status'] == 'Approved'){ ?>
							<p class="bg-primary"><?php echo $d['status']; ?> </p>
					<?php }else if($d['status'] == 'NotAccepted'){ ?>
							<p class="bg-danger"><?php echo $d['status']; ?> </p>
					<?php }
					?>
					</td>
					<td>
					<?php if($d['status'] == 'Diserahkan'){ ?>
						<a href="edit.php?id=<?php echo $d['id_project']; ?>">Edit</a>
					<?php }else if($d['status'] == 'Approved'){ ?>
						<p><b>Approved !</b></p>
					<?php }else if($d['status'] == 'NotAccepted'){ ?>
						<p><b>File Anda Ditolak</b></p>
					<?php } ?>
					</td>
				</tr>
				<?php
			}
 
			?>
		</table>