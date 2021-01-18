<?php
require_once("../server/koneksi.php");
 
if(isset($_POST['submit'])){

$status = $_POST['status'];
 		
     
    // query update data
    $query = "UPDATE tiga_dimensi SET status = '$status' WHERE id_project = $id_project";
    if(mysqli_query($connection, $query)){
        header("Location: index.php?m=status_file_dsn");
    }else{
        echo "Edit Data Gagal";
    }
}
 
$id = $_GET['id_project']; // id berasal dari url
$query = "SELECT * FROM tiga_dimensi WHERE id_project = $id";
$data = mysqli_query($connection, $query);
header("location:index.php?m=status_file_dsn");
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
        <?php 
            if (isset($_SESSION['username'])) { ?>
    <form class="form-horizontal" action="edit_status.php" method="post">
    
    <div class="form-group">
    <label for="status" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-10">
				<select id="kategori" class="form-control" name="id_kategori">
					<option value="None">---SELECT---</option>
                    <option value="Approved">Approved</option>
                    <option value="NotAccepted">Not Approved</option>
                				</select>

    </div>
  </div>
        <input type="hidden" name="id" value="<?php echo $row['id_project']; ?>">
        <input type="submit" name="submit" value="Edit Data">
    </form>
    <?php
    }

    
    ?>
    <?php
    }//end while
    mysqli_close($connection); // menutup koneksi ke database
    ?>