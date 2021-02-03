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

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
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

            <li class="nav-item active"><a class="nav-link" href="bukutamu.php">BUKU TAMU</a></li>

            <li class="nav-item"><a class="nav-link" href="daftar_tamu.php">DAFTAR TAMU</a></li>

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

  <div class="send-message">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Buku Tamu</h2>
          </div>
        </div>
        <div class="col-md-4">
          <br>
          <div>
            <input type="hidden" name="webcam1" id='mypic'>
          </div>
          <div id="camera">Capture</div>
          <div id="webcam">

            <p><input type=button value="Ambil Gambar" onClick="preview()"></p>
            <br>
          </div>
          <div id="simpan" style="display:none">
            <!-- <input type=button value="Remove" onClick="batal()"> -->
            <!-- <input type=button value="Save" onClick="simpan()" style="font-weight:bold;"> -->
          </div>

          <div id="hasil"></div>

          <script src="webcam.min.js"></script>
          <script language="Javascript">
            // konfigursi webcam
            Webcam.set({
              width: 320,
              height: 240,
              image_format: 'jpg',
              jpeg_quality: 100
            });
            Webcam.attach('#camera');

            function preview() {
              // untuk preview gambar sebelum di upload
              Webcam.freeze();
              // ganti display webcam menjadi none dan simpan menjadi terlihat
              document.getElementById('webcam').style.display = 'none';
              // document.getElementById('simpan').style.display = '';
            }

            function batal() {
              // batal preview
              Webcam.unfreeze();
              // ganti display webcam dan simpan seperti semula
              document.getElementById('webcam').style.display = '';
              document.getElementById('simpan').style.display = 'none';
            }

            function simpan() {
              // ambil foto
              Webcam.snap(function (data_uri) {

                // upload foto
                Webcam.upload(data_uri, 'upload.php', function (code, text) {});
                document.getElementById('webcam').style.display = '';
                document.getElementById('simpan').style.display = 'none'

              });
            }
          </script>
        </div>
        <div class="col-md-8">
          <div class="contact-form">
            <br>
            <form id="contact" action="simpan.php" method="post">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <label class="control-label">Nama Lengkap :</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <label class="control-label">Nomor Identitas :</label>
                    <input name="no_identitas" type="text" class="form-control" placeholder="519xxxxxx" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <label class="control-label">Instansi :</label>
                    <input name="instansi" type="text" class="form-control" placeholder="Instansi/Negeri/Swasta/Pribadi"
                      required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <label class="control-label">No Telepon :</label>
                    <input name="nomor_telp" type="text" class="form-control" placeholder="081xxxxxx" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <label class="control-label">Alamat :</label>
                    <textarea name="alamat" rows="6" class="form-control" id="message" placeholder="Alamat"
                      required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <label class="control-label">Keperluan :</label>
                    <textarea name="keperluan" rows="6" class="form-control" id="message" placeholder="Keperluan"
                      required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="submit" onclick="simpan()" name="go" value="Simpan" /> <input type="submit"
                      onClick="document.location.reload(true)" value="Hapus" />
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              Stasiun Geofisika Denpasar 2020
              | Editor : <a href="https://it.unud.ac.id/">PKL-IT-UDAYANA</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
</body>

</html>