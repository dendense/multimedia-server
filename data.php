<!DOCTYPE html>
<html lang="en">

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
                    <?php 
                    session_start();
                    if(isset($_SESSION['username'])) {
                        echo "<a class='nav-link' href='logout.php'>Logout</a>";
                    } else {
                        echo "<a class='nav-link' href='login.php'>Login</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid py-3">
        <div style="background-image: url('img/bg2.jpeg'); height: 300px; background-size:cover; box-shadow:inset 0 0 0 2000px rgba(43, 43, 43, 0.6);"
            class="p-5 mb-3 bg-image text-light rounded-3">
            <div class="container-fluid py-1">
                <h1 class="display-5 fw-bold">Sekolah Sejurba SKADIK501</h1>
                <p class="col-md-8 fs-5">Daftar Sejurba yang bersekolah di SKADIK 501 </p>
                <?php
                if(isset($_SESSION['username'])){
                    echo "<a class='btn btn-success btn-lg mr-3' type='submit' name='export' href='proses-print.php'>Download Data
                    Siswa</a>
                    <a class='btn btn-primary btn-lg' type='button' href='edit.php'>Edit Data
                    Siswa</a>";
                } else {
                    echo "<a class='btn btn-success btn-lg' type='button' href='login.php'>Login untuk Unduh</a>";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card card-body mb-5">
            <table class="table container">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Pangkat</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once "config.php";
                        $no = 1;
                        $query = mysqli_query($koneksi, 'SELECT * FROM tb_data');
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $data['nrp_siswa'] ?></td>
                        <td><?php echo $data['nama_siswa'] ?></td>
                        <td><?php echo $data['pangkat_siswa'] ?></td>
                        <td><?php echo $data['umur_siswa'] ?> Tahun</td>
                        <td><?php echo $data['kelamin_siswa'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>