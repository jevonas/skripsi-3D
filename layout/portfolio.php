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
    <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                <div class="card-group">

                    <!-- Portfolio Item 1-->
                     <?php 
                    $query = mysqli_query($connection,"SELECT * FROM `tiga_dimensi` ORDER BY `id_project` DESC LIMIT 3 ");
                    
                    while ($row=mysqli_fetch_array($query))
                    { ?>
                      <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card">
                            <img src="assets/img/portfolio/<?php echo $row['gambar'];?>" class="card-img-top" alt="<?php echo $row['gambar'];?>" width="200" height="200">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title'];?></h5>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">
                                <a href="detail.php?id=<?php echo $row['id_project'];?>">Lihat Disini </a>
                            </small>
                        </div>
                    </div>
                        </div>  
                    
                    <?php 
                    }
                    ?>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>