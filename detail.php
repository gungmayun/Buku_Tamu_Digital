<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/Logo-BMKG-new.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>Stasiun Geofisika Denpasar | Buku Tamu</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>


  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2><img src="assets/images/Logo-BMKG-new.png" height="60px" width="50px">
            <em>Stasiun Geofisika</em>Denpasar</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="bukutamu.php">BUKU TAMU</a></li>

            <li class="nav-item active"><a class="nav-link" href="daftar_tamu.php">DETAIL TAMU</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/panorama.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>.</h4>
            <h2>DETAIL TAMU</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php
  include 'koneksi.php';
  $id = $_GET['id'];
  $data = mysqli_query($koneksi,"select * from daftar_tamu where id='$id'");
  while($d = mysqli_fetch_array($data)){
    ?>
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading dt">
              <h2>Detail Tamu</h2>
            </div>
          </div>
          <div class="col-md-4">
            <fieldset>
            <img src="<?php echo $d['gambar']?>" class="img-fluid" alt="">
            <fieldset>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        Nama : <?php echo $d['nama']; ?>
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>No Identitas :
                      <?php echo $d['no_identitas']; ?>
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>Instansi:
                      <?php echo $d['instansi']; ?></td>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <br>Nomor Telepon :
                      <?php echo $d['nomor_telp']; ?></td>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <br>Alamat :
                      <?php echo $d['alamat']; ?></td>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <br>Keperluan :
                      <?php echo $d['keperluan']; ?></td>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
        <?php 
	}
  ?>
  <footer > <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="inner-content">
                            Stasiun Geofisika Denpasar 2020 | Editor :
                            <a href="https://it.unud.ac.id/">PKL-IT-UDAYANA</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </footer >
    </body>
</html>