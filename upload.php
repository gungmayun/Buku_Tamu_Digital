<?php

$nama_file = date('YmdHis').'.jpg';
$direktori = 'gambar/';
$target = $direktori.$nama_file;
move_uploaded_file($_FILES['webcam']['tmp_name'], $target);

?>