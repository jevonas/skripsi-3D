<!DOCTYPE html>
<html lang="en">
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
  <body id="page-top">
  <?php
include "f1.php";
// get id
$id = $_GET['id'];
$query = mysqli_query($connection,"SELECT * FROM `tiga_dimensi` WHERE `id_project` = '$id' ");

?>



   
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php

        $data = mysqli_fetch_array($query);
       // print_r($data);
        }
        ?>

<?php include "layout/headerdetail.php"; ?>
<br />
<br />
<br />
<br />
<br />
<br />
  <div class="container">
  <div class="row">
    <div class="col-12"><h2><?php echo $data['title']; ?></h2></div>
  </div>
      <br />
  <div class="row">
    <div class="col-8">

      <img src="assets/img/portfolio/<?php echo $data['gambar']; ?> " width="200" height="200" ?>


    </div>
    <div class="col-4">Keterangan: 

        <table class="table table-bordered border-primary">
        <tr>
            <th> Nama mhs </th>
            <td> <?php echo $data['nama_mhs']; ?> </td>
        </tr>  
        <tr>
            <th> NIM</td>
            <td> <?php echo $data['nim_mhs']; ?> </td>
        </tr>
        <tr>
            <th> Keterangan</th>
            <td> <?php echo $data['keterangan']; ?> </td>
        </tr>  
       </table>
       
    </div>
  </div>
  <div class="row">
    <div class="col-12"> <a href="3d.php?id=<?php echo $data['id_project']; ?>">Lihat Virtual Reality </a> </div>
  </div>
</div>
<br />
<br />
<?php 
include "layout/footerdetail.php";
?>

 <!-- Bootstrap core JS-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    </html>