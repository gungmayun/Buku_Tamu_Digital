<?php
include("koneksi.php");
// var_dump($_POST);die(); 
$tanggal = date("Y-m-d");
$nama=$_POST['nama'];
$no_identitas=$_POST['no_identitas'];
$instansi=$_POST['instansi'];
$nomor_telp = $_POST['nomor_telp'];
$alamat = $_POST['alamat'];
$keperluan=$_POST['keperluan'];
$webcam1 =$_POST['webcam1'];
$nama_file = date('YmdHis').'.jpg';
$direktori = 'gambar/';
$target = $direktori.$nama_file;

// move_uploaded_file($_FILES[$webcam1][$nama_file], $target);

//nama jadi datetime biar unik
move_uploaded_file($_FILES['webcam']['tmp_name'], $target);

$sql="insert into daftar_tamu(tanggal,nama,no_identitas,instansi,nomor_telp,alamat,keperluan,gambar) values(NOW(),'$nama','$no_identitas','$instansi','$nomor_telp','$alamat','$keperluan','$target')";
mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
header('location:bukutamu.php');
?>