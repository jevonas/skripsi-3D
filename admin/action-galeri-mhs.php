<?php include('../server/koneksi.php') ?>
<br>
            <div class="container">
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                <div class="card-group">

                    <!-- Portfolio Item 1-->
                     <?php 
                    $query = mysqli_query($connection,"SELECT * FROM `tiga_dimensi` ORDER BY `id_project` DESC");
                    
                    while ($row=mysqli_fetch_array($query))
                    { ?>
                      <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card">
                        <?php 
						$image_path = "../assets/img/portfolio/".$row['gambar'];
						if (file_exists($image_path)) {
						?>
						 <img src="../assets/img/portfolio/<?php echo $row['gambar'] ?>" width="200" height="200">
						<?php 
						} else { ?>
						
							<img src="../assets/img/no_imag.png" width="200" height="200">
						
					<?php
						}
					?>
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title'];?></h5>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">
                                <a href="../detail.php?id=<?php echo $row['id_project'];?>">Lihat Disini </a>
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