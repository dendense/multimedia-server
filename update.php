<?php
    include 'config.php';
    
    $id       = $_POST['id'];
    $nrp      = $_POST['nrp_siswa'];
    $nama     = $_POST['nama_siswa'];
    $sekolah  = $_POST['sekolah_siswa'];
    $pangkat  = $_POST['pangkat_siswa'];
    $korp     = $_POST['korp_siswa'];
    $umur     = $_POST['umur_siswa'];
    $kelamin  = $_POST['kelamin_siswa'];
    
    $query = "UPDATE tb_data SET nrp_siswa='$nrp', nama_siswa='$nama', sekolah_siswa='$sekolah', pangkat_siswa='$pangkat', korp_siswa='$korp', umur_siswa='$umur', kelamin_siswa='$kelamin' WHERE id='$id'";
    mysqli_query($koneksi,$query);
    header('location:edit.php');
?>