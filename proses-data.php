<?php
include("config.php");
//Variable Data Disesuaikan dengan Variabel Kalian Bro
$nrp      = $_POST['nrp_siswa'];
$nama     = $_POST['nama_siswa'];
$sekolah  = $_POST['sekolah_siswa'];
$pangkat  = $_POST['pangkat_siswa'];
$korp     = $_POST['korp_siswa'];
$umur     = $_POST['umur_siswa'];
$kelamin  = $_POST['kelamin_siswa'];

$ceknrp = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_data WHERE nrp_siswa='$nrp'"));
if($ceknrp > 0){
    echo "<script>window.alert('NRP Yang Anda Masukan Sudah Ada! Masukan Kembali Data Anda!')
    window.location='edit.php'</script>";
} else {
    mysqli_query($koneksi,"INSERT INTO tb_data (nrp_siswa,nama_siswa,sekolah_siswa,pangkat_siswa,korp_siswa,kelamin_siswa,umur_siswa) VALUE ('$nrp','$nama','$sekolah','$pangkat','$korp','$kelamin','$umur')");
    echo "<script>window.alert('Data Berhasil Disimpan!')
    window.location='edit.php'</script>";
}

?>