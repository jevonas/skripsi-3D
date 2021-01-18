<?php
require_once("../server/koneksi.php");
 
if(isset($_POST['submit'])){
$id_project = $_POST['id_project'];
$title = $_POST['title'];
$nama_mhs = $_POST['nama_mhs'];
$nim_mhs = $_POST['nim_mhs'];
$rotX = $_POST['rotX'];
$rotY = $_POST['rotY'];
$rotZ = $_POST['rotZ'];
$posX = $_POST['posX'];
$posY = $_POST['posY'];
$posZ = $_POST['posZ'];
$tahun_angkatan = $_POST['tahun_angkatan'];
$keterangan = $_POST['keterangan'];
$id_kategori = $_POST['id_kategori'];
$nip_dosen = $_POST['nip_dosen'];
$status = "Diserahkan";
$rand = rand();
$ekstensi =  array('glb');
$filename = $_FILES['file_project']['name'];
$ukuran = $_FILES['file_project']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$rano = rand();
$ekstensi_1 =  array('png','jpg','jpeg','gif');
$filename_1 = $_FILES['gambar']['name'];
$ukuran_1 = $_FILES['gambar']['size'];
$ext_1 = pathinfo($filename_1, PATHINFO_EXTENSION);
 		
    
if($ukuran && $ukuran_1 < 1044070){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['file_project']['tmp_name'], '../models/'.$rand.'_'.$filename);
        $yy = $rano.'_'.$filename_1;
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../assets/img/portfolio/'.$rano.'_'.$filename_1);
        $query = "UPDATE tiga_dimensi SET title = '$title', nama_mhs = '$nama_mhs', nim_mhs = '$nim_mhs', file_project = '$xx', rotX = '$rotX', rotY = '$rotY', rotZ = '$rotZ', posX = '$posX', posY = '$posY', posZ = '$posZ', tahun_angkatan = '$tahun_angkatan', keterangan = '$keterangan', id_kategori = '$id_kategori', nip_dosen = '$nip_dosen', status = '$status', gambar = '$yy' WHERE id_project = $id_project";
        if(mysqli_query($connection, $query)){
        header("Location: index.php?m=status_file");
        }else{
        echo "Edit Data Gagal";
    }
}else{
    header("location:index.php?alert=gagal_ukuran");
    }
 
    // query update data
    
}
 
$id = $_GET['id']; // id berasal dari url
$query = "SELECT * FROM tiga_dimensi WHERE id_project = $id";
$data = mysqli_query($connection, $query);
?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin Template</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <h3>Edit</h3>
    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <form class="form-horizontal" action="edit.php" method="post">
    <div class="form-group">
        <label for="inputTitle" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputTitle" placeholder="Masukkan Judul Aset" name="title" value="<?php echo $row['title']; ?>" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="inputNama" class="col-sm-2 control-label">Nama Mahasiswa</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputTitle" placeholder="Masukkan Nama Mahasiswa" name="nama_mhs" value="<?php echo $row['nama_mhs']; ?>" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="inputNim" class="col-sm-2 control-label">Nim Mahasiswa</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputNim" placeholder="Masukkan NIM Mahasiswa" name="nim_mhs" value="<?php echo $row['nim_mhs']; ?>" required="required">
        </div>
    </div>
    <div class="form-group">
				<label class="col-sm-2 control-label">File Aset 3D</label>
                <div class="col-sm-10">
				<input type="file" name="file_project" required="required" value="<?php echo $row['file_project']; ?>">
				<p style="color: red">Ekstensi yang diperbolehkan .glb</p>
			</div>
            </div>
    <div class="form-group">
				<label class="col-sm-2 control-label">File Gambar Aset</label>
                <div class="col-sm-10">
				<input type="file" name="gambar" required="required" value="<?php echo $row['gambar']; ?>">
				<p style="color: red">Ekstensi yang diperbolehkan .jpeg | .jpg | .png | .gif</p>
			</div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Rotation (default value : 20)</label>
               <br />
                 <table border="0" cellpadding="40" width="40" class="col-sm-10">
                         <tr > 
                             <td><label>X</label></td>
                                 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi X" name="rotX" value="<?php echo $row['rotX']; ?>"></td>
                             <td><label>Y</label></td>
                                 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi Y" name="rotY" value="<?php echo $row['rotY']; ?>"></td>
                             <td><label>Z</label></td>
                                 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi Z" name="rotZ" value="<?php echo $row['rotZ']; ?>"></td>
                        
                         </tr> 
                 </table>
                 </div>

                 <div class="form-group">
                <label class="col-sm-2 control-label">Position (default value : 20)</label>
               <br />
                 <table border="0" cellpadding="40" width="40" class="col-sm-10">
                         <tr > 
                             <td><label>X</label></td>
                                 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi X" name="posX" value="<?php echo $row['posX']; ?>"></td>
                             <td><label>Y</label></td>
                                 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi Y" name="posY" value="<?php echo $row['posY']; ?>"></td>
                             <td><label>Z</label></td>
                                 <td><input type="number" class="form-control" placeholder="Masukkan Rotasi Z" name="posZ" value="<?php echo $row['posZ']; ?>"></td>
                        
                         </tr> 
                 </table>
 
             </div>
             <div class="form-group">
				<label class="col-sm-2 control-label">Tahun Angkatan</label>
                <div class="col-sm-10">
				<input type="number" class="form-control" placeholder="Tahun Angkatan (Contoh : 2016)" name="tahun_angkatan" value="<?php echo $row['tahun_angkatan']; ?>" required="required">
            </div>
            </div>
            <div class="form-group">
				<label class="col-sm-2 control-label">Keterangan Aset</label>
                <div class="col-sm-10">
				<textarea class="form-control" name="keterangan" value="<?php echo $row['keterangan']; ?>" required="required"></textarea>
			</div>
            </div>
    <div class="form-group">
    <label for="kategori" class="col-sm-2 control-label">Kategori</label>
    <div class="col-sm-10">
				<select id="kategori" class="form-control" name="id_kategori">
					<option value="">---SELECT---</option>
					<?php 
					$sql ="SELECT * FROM `kategori`";
					$data = mysqli_query($connection,$sql);
					while($d = mysqli_fetch_array($data)){	 
					?>
                <?php if ($d['kategori'] == $row['id_kategori']) {
                    $select="selected";
                }else{
                    $select="";
                } 
                ?>
				<option $select value="<?php echo $row['id_kategori']; ?>" > <?php echo $d['kategori']; ?>  </option>
                    
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
                <?php if ($d['nm_dosen'] == $row['nip_dosen']) {
                    $select="selected";
                }else{
                    $select="";
                } 
                ?>
				<option $select value="<?php echo $row['nip_dosen']; ?>" > <?php echo $d['nm_dosen']; ?></option>
                    
                    <?php
					}
					?>
		</select>
            </div>
    </div>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
        <div class="col-sm-10">
        <input type="submit" name="submit" value="Edit Data">
                </div>
                </div>
    </form>
    <?php
    } // end while
 
    mysqli_close($connection); // menutup koneksi ke database
    ?>
