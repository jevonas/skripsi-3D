<?php session_start();?>
<?php include '../server/koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin MyArchitectVR</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    



    
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
    <?php include('header.php'); ?>
      
        <?php include('menu.php'); ?>
      
      <section class="content">
        <div class="inner">
          <?php 
            // ambil id 
          if (!empty ($_GET['m'])) {
                $m = $_GET['m'];
                switch ($m) {
                    case 'upload_file':
                        include $m.".php";
                        break;
                    case 'status_file':
                            include $m.".php";
                            break;
                    case 'login':
                      include $m.".php";
                      break;
                    case 'action-login':
                        include $m.".php";
                        break;
                    case 'action-logout':
                      include $m.".php";
                      break;
                    case 'edit':
                        include $m.".php";
                        break;
                    case 'edit_status':
                        include $m.".php";
                        break;
                    case 'action-galeri-mhs':
                        include $m.".php";
                        break;
                    case 'status_file_dsn':
                        include $m.".php";
                        break;    
                    default:
                        include "home.php";
                        break;
                }
        }  else {
            include "home.php";
        }

        ?>
        </div>
      </section>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
        $("menu li > a").click(function(e){
        $("menu ul ul").slideUp(),$(this).next().is(":visible") || $(this).next().slideDown(),e.stopPropagation()
        });
        </script>
    </body>
</html>