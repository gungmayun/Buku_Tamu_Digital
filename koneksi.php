<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "bukutamu_bmkg";
   $koneksi=mysqli_connect ($hostname,$username,$password,$dbname) or die (mysqli_error());
   mysqli_select_db ($koneksi,$dbname) or die (mysqli_error());
?>