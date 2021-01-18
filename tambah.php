<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MyArchitectVR</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<body>

<?php include('layout/headerdetail.php'); ?>
<br />
<br />
<br />
<br />
<br />
<br />
	<div class="container">
		<h2 style="text-align: center;">Tambah Aset 3D</h2>
		<form action="user_act.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Title</label>
				<input type="text" class="form-control" placeholder="Masukkan Judul Aset" name="title" required="required">
			</div>
            <div class="form-group">
				<label>Nama Mahasiswa</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama anda" name="nama_mhs" required="required">
			</div>
            <div class="form-group">
				<label>NIM Mahasiswa</label>
				<input type="text" class="form-control" placeholder="Masukkan NIM anda" name="nim_mhs" required="required">
			</div>
            <div class="form-group">
				<label>File Aset 3D</label>
				<input type="file" name="file_project" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .glb</p>
			</div>
			<div class="form-group">
				<label>Rotation X <small> default 20</small></label>
				<input type="number" class="form-control" placeholder="Masukkan Rotasi X" name="rotX" value="20">
                <label>Rotation Y <small> default 20</small></label>
				<input type="number" class="form-control" placeholder="Masukkan Rotasi Y" name="rotY" value="20">
                <label>Rotation Z <small> default 20</small></label>
				<input type="number" class="form-control" placeholder="Masukkan Rotasi Z" name="rotZ" value="20">
			</div>
            <div class="form-group">
				<label>Position X <small> default 20</small></label>
				<input type="number" class="form-control" placeholder="Masukkan Posisi X" name="posX" value="20">
                <label>Position Y <small> default 20</small></label>
				<input type="number" class="form-control" placeholder="Masukkan Posisi Y" name="posY" value="20">
                <label>Position Z <small> default 20</small></label>
				<input type="number" class="form-control" placeholder="Masukkan Posisi Z" name="posZ" value="20">
			</div>
            <div class="form-group">
				<label>Tahun Angkatan</label>
				<input type="number" class="form-control" placeholder="Tahun Angkatan (Contoh : 2016)" name="tahun_angkatan" required>
            </div>
			<div class="form-group">
				<label>Keterangan Aset</label>
				<textarea class="form-control" name="keterangan" required="required" placeholder="Keterangan Lengkap Aset 3D"></textarea>
			</div>
            <div class="form-group">
				<label>Kategori</label>
				<div class="col-sm-10">
					<div class="form-check">
						<input type="radio" class="form-check-input" name="id_kategori" value="1" required>
						<label class="form-check-label">Bangunan Gedung</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="id_kategori" value="2" required>
						<label class="form-check-label">Bangunan Rumah</label>
					</div>
				</div>
			</div>
            <div class="form-group">
				<label">Dosen Pengajar</label>
					<select name="nip_dosen" class="form-control" required>
						<option value="">Pilih Dosen</option>
						<option value="DP1211">Ary Budi Warsito, M.Kom.</option>
                        <option value="DP1210">Asep Saefullah, M.Kom.</option>
					</select>
			</div>
			<div class="form-group">
				<label>Foto Aset 3D </label>
				<input type="file" name="gambar" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>
 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>