<aside class="sidebar">
<menu>
          <ul class="menu-content">
            <li><a href="?m=home"><i class="fa fa-home"></i> Home</a></li>
            <?php 
            if (empty($_SESSION['username'])) { ?>
            <li>
              <a href="#"><i class="fa fa-cube"></i> <span>Mahasiswa</span> 
                        <i class="fa fa-angle-down pull-right"></i></a>
              <ul>
                <li><a href="?m=upload_file">Upload file</a></li>
                <li><a href="?m=status_file">Cek Status</a></li>
                <li><a href="?m=action-galeri-mhs">Lihat Galeri</a></li>
              </ul>
            </li>
              <?php } ?>
            <?php 
            if (isset($_SESSION['username'])) { ?>


                  <li>
                  <a href="#"><i class="fa fa-cubes"></i> <span>Dosen</span> 
                            <i class="fa fa-angle-down pull-right"></i></a>
                  <ul>
                    <li><a href="?m=status_file_dsn">Acc File</a></li>
                    <li><a href="">Kategori</a></li>
                    <li><a href="">Produk</a></li>
                  </ul>
                </li>
            
            <?php
            }
            ?>
           

            <li>
              <?php 
                if (isset($_SESSION['username'])) { ?>

                  <a href="?m=action-logout"><i class="fa fa-angle-up"></i></i> <span>Logout Dosen</span></a>

                <?php
                } else { ?>

                      <a href="?m=login"><i class="fa fa-angle-up"></i> <span>Login Dosen</span></a>

                <?php 
                }
                ?>
          </li>
            <li><a href="../index.php"><i class="fa fa-shopping-basket"></i> <span>Lihat Galeri</span></a></li>
          </ul>
</menu>
</aside>
