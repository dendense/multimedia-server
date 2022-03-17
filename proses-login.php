<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting</title>
</head>

<body>
    <?php
//Variable Data Disesuaikan dengan Variabel Kalian Bro
include("config.php");
$username   = $_POST['username'];
$password   = md5($_POST['passwd']);

$login  = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username = '$username' AND passwd='$password'");
$row    = mysqli_fetch_array($login);

if ($row['username'] == $username AND $row['passwd'] == $password)
{
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['passwd'] = $row['passwd'];

    header('location:index.php'); //jika login berhasil, maka ganti/letakkan halaman utamamu disini
}else{
    echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
    echo "<script>location='login.php';</script>";
  }
?>
</body>

</html>