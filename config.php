<?php
$servername = "localhost";
$database   = "db_latis"; //Sesuaikan Database Pribadi
$username   = "phpskadik501"; //Sesuaikan Akun Pribadi "root"
$password   = "skadik501"; //Sesuaikan Password Pribadi kosongkan

// Membuat Koneksi Dengan Server XAMPP
$koneksi = mysqli_connect($servername,$username,$password,$database);

// Checking Koneksi
if(!$koneksi){
    die("Koneksi Gagal : " . mysqli_connect_error());
}
//echo "Koneksi Berhasil";

?>