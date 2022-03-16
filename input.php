<!DOCTYPE html>
<html lang="en">
<?php
$InputPlaceholder   = ["NRP","Nama","Pangkat","Sekolah","Korp","Nilai Pemrograman","Nilai Office","Nilai SMAPTA"];
$InputName          = ["nrp_siswa","nama_siswa","pangkat_siswa","sekolah_siswa","korp_siswa","nilai_pemrograman","nilai_office","nilai_smapta",];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Welcome to SKADIK501</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">SKADIK501</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="Data.php">Data</a>
                    <a class="nav-link" href="input.php">Input</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid py-3">
        <div style="background-image: url('img/bg2.jpeg'); height: 380px; background-size:cover; box-shadow:inset 0 0 0 2000px rgba(43, 43, 43, 0.6);"
            class="p-5 bg-image text-light rounded-3">
            <div class="container-fluid py-1">
                <h1 class="display-5 fw-bold">Multimedia Server SKADIK501</h1>
                <p class="col-md-8 fs-5">Silahan daftarkan diri anda di INPUT Multimedia Server SKADIK501 untul langkah
                    pertma mengakses web multimedia Server SKADIK501 </p>
                <a class="btn btn-success btn-lg" type="button" href="http://skadik501.net:8096/"> Akses Media
                    Stream</a>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <?php
        for ($i = 0,$j = 0; $i < count($InputPlaceholder),$j < count($InputName); $i++,$j++){?>
        <div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><?php echo $InputPlaceholder[$i]?></span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" name="<?php echo $InputName[$j]?>">
            </div>
        </div>
        <?php 
        }
        ?>
    </div>


    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>