<form action="user_act.php" class="form-horizontal" method="post" enctype="multipart/form-data">
	
  <div class="form-group">
    <label for="inputTitle" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
	  <input type="text" class="form-control" id="inputTitle" placeholder="Masukkan Judul Aset" name="title" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="nama_mhs" class="col-sm-2 control-label">Nama Mahasiswa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa">
    </div>
  </div>
  <div class="form-group">
    <label for="nim_mhs" class="col-sm-2 control-label">NIM Mahasiswa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nim_mhs" name="nim_mhs" placeholder="Masukkan NIM Mahasiswa">
    </div>
  </div>
  <div class="form-group">
				<label class="col-sm-2 control-label">File Aset 3D</label>
				<div class="col-sm-10">
				<input type="file" name="file_project" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .glb</p>
			</div>
		</div>
		<div class="form-group">
				<label class="col-sm-2 control-label">Foto Aset 3D</label>
				<div class="col-sm-10">
				<input type="file" name="gambar" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>
		</div>	
		<div class="form-group">
				
				<label class="col-sm-2 control-label">Rotation</label>
			   <br />
				 <table border="0" cellpadding="40" width="1000" class="col-sm-10">
						 <tr> 
							 <td><label>&nbsp;X</label></td>
								 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi X" name="rotX" value="20"></td>
							 <td><label>&nbsp;Y</label></td>
								 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi Y" name="rotY" value="20"></td>
							 <td><label>&nbsp;Z</label></td>
								 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi Z" name="rotZ" value="20"></td>
						
						 </tr> 
				 </table>
 
			 </div>
			 <div class="form-group">
				
				<label class="col-sm-2 control-label">Position</label>
			   <br />
				 <table border="0" cellpadding="40" width="1000" class="col-sm-10">
						 <tr > 
							 <td><label>&nbspX</label></td>
								 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi X" name="posX" value="20"></td>
							 <td><label>&nbspY</label></td>
								 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi Y" name="posY" value="20"></td>
							 <td><label>&nbspZ</label></td>
								 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi Z" name="posZ" value="20"></td>
						
						 </tr> 
				 </table>
			 </div>
			 <div class="form-group">
				<label for="tahun_angkatan" class="col-sm-2 control-label">Tahun Angkatan</label>
				<div class="col-sm-10">
      			<input type="text" class="form-control" id="tahun_angkatan" name="tahun_angkatan" placeholder="Masukkan Tahun Angkatan (Misal: 2016)">
    		</div>
  		</div>
		  <div class="form-group">
				<label for="keterangan" class="col-sm-2 control-label">Keterangan Aset</label>
				<div class="col-sm-10">
				<textarea class="form-control" id="keterangan" name="keterangan" required="required" placeholder="Keterangan Lengkap Aset 3D"></textarea>
			</div>
			</div>
  <div class="form-group">
    <label for="kategori" class="col-sm-2 control-label">Kategori</label>
    <div class="col-sm-10">
				<select id="kategori" class="form-control" name="kategori">
					<option value="">---SELECT---</option>
					<?php 
					$sql ="SELECT * FROM `kategori`";
					$data = mysqli_query($connection,$sql);
					while($d = mysqli_fetch_array($data)){	 
					?>

				<option value="<?php echo $d['id_kategori']; ?>" > <?php echo $d['kategori']; ?>  </option>
					<?php
					}
					?>
				</select>

    </div>
  </div>


  <div class="form-group">
    <label for="nip_dosen" class="col-sm-2 control-label">Dosen Pengajar</label>
    <div class="col-sm-10">
				<select id="nip_dosen" class="form-control" name="nip_dosen">
					<option value="">---SELECT---</option>
					<?php 
					$sql ="SELECT * FROM `dosen`";
					$data = mysqli_query($connection,$sql);
					while($d = mysqli_fetch_array($data)){	 
					?>

				<option value="<?php echo $d['nip_dosen']; ?>" > <?php echo $d['nm_dosen']; ?>  </option>
					<?php
					}
					?>
				</select>

    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
	<input type="submit" name="" value="Simpan" class="btn btn-primary">
    </div>
  </div>
</form>
		
            			
			
		</form>