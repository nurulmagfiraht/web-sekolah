<?php
include ('navbar_forend.php');
include ('koneksi.php');
?>
<style>
.parallax {
  /* The image used */
  background-image: url('img/smkn8.JPG');

  /* Set a specific height */
  min-height: 500px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

</style>
<!-- Masthead-->
<header class="masthead bg-secondary text-white text-center parallax" id="overlay" style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
  <div class="container d-flex flex-column align-items-center justify-content-center">
    <!-- Masthead Avatar Image-->
    <img class="masthead-avatar mb-5"/>
    <!-- Masthead Heading-->
    <h1 class="masthead-heading text-uppercase mb-10" style="color: white; text-shadow: 5px 5px 6px #000000;">
      SMKN 8 Makassar
    </h1>
    <!-- Icon Divider-->
    <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <!-- Masthead Subheading-->
    <p class="masthead-subheading font-weight-light mb-0">Profil Sekolah</p>
  </div>
</header>


    <section class="page-section bg-secondary text-white mb-0" id="visi">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Visi SMKN 8 Makassar</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-12  ms-auto conte"> 
            <p class="lead text-center">Mencetak lulusan yang  berwawasan profil pelajar Pancasila dan berdaya saing global</p>
          </div>
        </div>
        <!-- About Section Button-->
      </div>
    </section>

    
    <section class="page-section bg-secondary text-white mb-0" id="misi">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Misi SMKN 8 Makassar</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-12  ms-auto conte"> 
          <p class="lead text-justify"><br>
              1.	Menyelenggarakan kegiatan pembelajaran bidang Hospitality, ekonomi kreatif dan manajemen yang berpusat pada peserta didik serta berwawasan profil Pelajar Pancasila.<br>
              2.	Menyelenggarakan pendidikan berbasis Teaching Factory dan industri melalui pendekatan teknologi informatika dan komunikasi dan pendekatan jiwa wirausaha.<br>
              3.	Mewujudkan kemitraan yang bermakna dengan Dunia Kerja.<br>
              4.	Mewujudkan manajemen sekolah yang mandiri  dan melakukan pelayanan prima.<br>
            </p>
          </div>
        </div>
        <!-- About Section Button-->
      </div>
    </section>

<!-- Portfolio Section-->
<section class="page-section portfolio" id="kegiatan">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kegiatan</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/upacara.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/upacara.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/upacara.jpg" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- About Section-->
    <section class="page-section bg-secondary text-white mb-0" id="pengumuman">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Pengumuman</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="container" style="margin-top: 130px">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Jadwal Kegiatan Pendaftaran</h4>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kegiatan</th>
                            <th scope="col">Jadwal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Pendaftaran</td>
                            <td>2 Juli - 2 Agustus 2024</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Seleksi Berkas</td>
                            <td>3 Agustus - 31 Agustus 2024</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Pengumuman</td>
                            <td>3 September 2024</td>
                        </tr>
                    </tbody>
                </table>

                <p>
                    <a href="NINII.docx" download class="btn btn-primary">
                        Klik disini untuk unduh form pendaftaran siswa baru
                    </a>
                </p>

            </div>
        </div>
    </div>
</div>
    </div>
</body>
</html>

        <!-- About Section Button-->
      </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="guru">
      <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Struktur</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>

        
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
          <div class="col">
          <div class="table-responsive">
              <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>DIVISI</th>
                        <th>JABATAN</th>
                        <th>TAHUN MASUK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no     =1;
                    $sql    = "SELECT * from table_struktur ";
                    $result = mysqli_query($kon,$sql);
                    while ($data =mysqli_fetch_array($result))
                    {
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td>
                        <a href="detail_struktur.php?id=<?=$data['id_nama']?>">

                          <?php echo $data['nama'];?>
                        </a>  
                      
                      </td>
						            <td><?php echo $data['divisi'];?></td>
                        <td><?php echo $data['jabatan'];?></td>
                        <td><?php echo $data['tahun_masuk'];?></td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section bg-secondary text-white mb-0" id="about">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-12  ms-auto"> 
            <p class="lead text-center">Website ini berisikan tentang informasi seputar SMKN 8 Makassar
            </p>
<br></br>
            <p class="lead text-center">SMK Negeri 8 Makassar<br>
            Jl. Monginsidi No.17, Maricaya Baru, Kec. Makassar, Kota Makassar, Sulawesi Selatan 90141<br>
            Telp. (0411) 854374
            </p>
            <br></br>
            <p class="lead text-center">
            Created by
            </p>
          </div>
        </div>
        <!-- About Section Button-->
      </div>
    </section>
<?php
include ('footer_forend.php');
?>