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
        <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
        <script src="https://cdn.rawgit.com/donmccurdy/aframe-extras/v5.0.1/dist/aframe-extras.min.js" ></script>
        <script src="https://unpkg.com/aframe-event-set-component@5/dist/aframe-event-set-component.min.js"></script>
        <script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
        <script src="https://unpkg.com/aframe-template-component@3.2.1/dist/aframe-template-component.min.js"></script>
        <script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.js"></script>
  </head>
  <body>

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

    <a-scene>
      <a-assets>
        <a-asset-item id="asset" response-type="arraybuffer" src="models/<?php echo $data['file_project']?>"></a-asset-item>
      </a-assets>
      <a-entity gltf-model="#asset" position="<?php echo $data['posX']?> <?php echo $data['posY']?> <?php echo $data['posZ']?>" rotation="<?php echo $data['rotX']?> <?php echo $data['rotY']?> <?php echo $data['rotZ']?>" scale="0.01 0.01 0.01" ></a-entity>
      <a-entity camera="active: true" look-controls wasd-controls position="0.3 0.1 0" data-aframe-default-camera></a-entity>
      <!-- <a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9" shadow></a-box>
      <a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E" shadow></a-sphere>
      <a-cylinder position="1 0.75 -3" radius="0.5" height="1.5" color="#FFC65D" shadow></a-cylinder>
      <a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#7BC8A4" shadow></a-plane> -->
    </a-scene>
    <!-- Bootstrap core JS-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
  </body>
</html>