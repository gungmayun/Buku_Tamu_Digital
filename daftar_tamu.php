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

            <li class="nav-item active"><a class="nav-link" href="daftar_tamu.php">DAFTAR TAMU</a></li>

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
            <h4>Silahkan Diisi</h4>
            <h2>BUKU TAMU</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
        <br>
        <br>
        <form action="daftar_tamu.php" method="get">
          <center><label>Cari :</label>
            <input type="text" name="cari" placeholder="cari disini">
            <input type="submit" value="Cari">
          </center>
        </form>
        <br>
        <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
    }
    ?>
        <div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <table class="table table-bordered table-hover table-striped">
                            <tr class="row100 head">
                                <th style="text-align:center">No</th>
                                <th style="text-align:center">Tanggal</th>
                                <th style="text-align:center">Nama</th>
                                <th style="text-align:center">No Identitas</th>
                                <th style="text-align:center">Instansi</th>
                                <th style="text-align:center">No Telepon</th>
                                <th style="text-align:center">Alamat</th>
                                <th style="text-align:center">Keperluan</th>
                                <th style="text-align:center">Detail</th>
                            </tr>

                        <?php 
        include 'koneksi.php';
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi,"select * from daftar_tamu where nama like '%".$cari."%'");				
        }else{
            $data = mysqli_query($koneksi,"select * from daftar_tamu");		
        }
		$no = 1;
		while($d = mysqli_fetch_array($data)){

			?>
                            <tr>
                                <td align="center"><?php echo $no++; ?></td>
                                <td align="center"><?php echo $d['tanggal']; ?></td>
                                <td align="center"><?php echo $d['nama']; ?></td>
                                <td align="center"><?php echo $d['no_identitas']; ?></td>
                                <td align="center"><?php echo $d['instansi']; ?></td>
                                <td align="center"><?php echo $d['nomor_telp']; ?></td>
                                <td align="center"><?php echo $d['alamat']; ?></td>
                                <td align="center"><?php echo $d['keperluan']; ?></td>
                                <!-- show gambar -->
                                <!--<td align="center"><img src="<?php echo $d['gambar']?>" alt=""></td>-->
                                <td>
                                    <a href="detail.php?id=<?php echo $d['id']; ?>">Detail</a>
                                </td>
                            </tr>
                            <?php 
		}
		?>
                        </table>
                        
                        </div>
                    </body>
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
                </html>