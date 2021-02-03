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

            <li class="nav-item active"><a class="nav-link" href="input_tamu.php">BUKU TAMU</a></li>

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
  </div>
  <div class="send-message">
	<div id="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Registrasi Tamu</h2>
				</div>
			</div>
		</div>
	</div>
	</div>
		<div class="col-md-12">
		<br><br><br><br>
		<form action="simpan.php" method="post">
			<div class="col-md-8">
			<br><p><b>Nama Lengkap :</b><br><input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required /></p>
			<p><b>Nomor Identitas :</b><br><input type="text" class="form-control" name="no_identitas" placeholder="Nomor Identitas" required /></P>
            <p><b>Instansi :</b><br><input type="text" class="form-control"" name="instansi" placeholder="Instansi/Swasta/Pribadi" required /></p>
            <p><b>Nomor Telepon :</b><br><input type="text" class="form-control" name="nomor_telp" placeholder="0821xxxxxxxx" required /></p>
            <p><b>Alamat :</b><br><input type="text" class="form-control" name="alamat" placeholder="Denpasar" required /></p>
			<p><b>Keperluan :</b><br><textarea name="keperluan" rows="6" class="form-control" cols="50" placeholder="Keperluan" required></textarea></p>
			<p><input type="submit" onclick="simpan()" name="go" value="Simpan" /> <input type="submit"  onClick="document.location.reload(true)" value="Hapus" /></p>
			</div>
			<p><b>Foto :</b><br>
			
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
			Webcam.attach( '#camera' );
			
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
				Webcam.snap( function(data_uri) {
                
                // upload foto
                Webcam.upload( data_uri, 'upload.php', function(code, text) {} );
				document.getElementById('webcam').style.display = '';
				document.getElementById('simpan').style.display = 'none'
 
            } );
        }
		</script>
     <!-- edit onclick simpan -->
			
            
		</form>

</body>
</html>
