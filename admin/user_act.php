<?php 
include 'koneksi.php';

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
        mysqli_query($connection, "INSERT INTO tiga_dimensi VALUES(NULL,'$title','$nama_mhs','$nim_mhs','$xx','$rotX','$rotY','$rotZ','$posX','$posY','$posZ','$tahun_angkatan','$keterangan','$id_kategori','$nip_dosen','$status','$yy')");
		header("location:index.php?m=status_file");
}else{
    header("location:index.php?alert=gagal_ukuran");
    }
       
        
?>