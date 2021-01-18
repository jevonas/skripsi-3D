<?php
    // variable pendefinisian kredensial
    //$usernamelogin = 'ary';
    //$passwordlogin = 'ary';

    // memulai session
    // mengambil isian dari form login
  
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 

    // cek database 
    $sql ="SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
 
    $data = mysqli_query($connection,$sql);
    $dataF= mysqli_fetch_array($data);
    // pengecekan kredensial login
    if ($dataF > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } 
    else {
        header("Location: index.php?m=login");
   }


?>