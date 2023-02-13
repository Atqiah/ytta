<?php
//koneksi Database
$server ="localhost";
$username = "root";
$password = "";
$database = "db_prakerin";

//buat koneksi
$koneksi = mysqli_connect($server, $username, $password, $database) or die(mysqli_error($koneksi));

?>