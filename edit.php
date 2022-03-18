<!DOCTYPE html>
<html lang="en">
<?php
$InputPlaceholder   = ["NRP","Nama","Pangkat","Sekolah","Korp","Kelamin","Umur"];
$InputName          = ["nrp_siswa","nama_siswa","pangkat_siswa","sekolah_siswa","korp_siswa","kelamin_siswa","umur_siswa"];
session_start();
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
                    <a class="nav-link" href="data.php">Data</a>
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

    <div class="container pt-5 pb-5">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#inputData" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            Masukan Data
        </a>

        <div class="card card-body mt-3">
            <input type="text" id="search" class="form-control mt-3 mb-5" placeholder="Cari nama...">
            <div class="table-responsive">
                <table class="table container">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Korp</th>
                            <th scope="col">Pangkat</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Kelamin</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody id="tampil">
                        <?php
                            require_once "config.php";
                            $no = 1;
                            $query = mysqli_query($koneksi, 'SELECT * FROM tb_data');
                            while ($row = mysqli_fetch_object($query)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $row->nrp_siswa; ?></td>
                            <td><?php echo $row->nama_siswa; ?></td>
                            <td><?php echo $row->korp_siswa; ?></td>
                            <td><?php echo $row->pangkat_siswa; ?></td>
                            <td><?php echo $row->umur_siswa; ?> Tahun</td>
                            <td><?php echo $row->kelamin_siswa; ?></td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="editing.php?id=<?php echo $row->id; ?>">Edit</a>
                                <a class="btn btn-sm btn-primary"
                                    href="delete.php?id=<?php echo $row->id; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="collapse mt-2" id="inputData">
            <div class="card card-body">
                <h3>Input Data Siswa Sejurba</h3>
                <form action="proses-data.php" method="POST">
                    <?php
                for ($i = 0,$j = 0; $i < count($InputPlaceholder),$j < count($InputName); $i++,$j++){?>
                    <div class="pt-3">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text"
                                id="inputGroup-sizing-sm"><?php echo $InputPlaceholder[$i]?></span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" name="<?php echo $InputName[$j]?>" required>
                        </div>
                    </div>
                    <?php 
                }
                ?>
                    <div>
                        <input class="btn btn-primary" type="submit" name="Submit" value="Masukan">
                        <input class="btn btn-danger" type="reset" name="reset" value="Batal">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            $.ajax({
                type: 'POST',
                url: 'search.php',
                data: {
                    search: $(this).val()
                },
                cache: false,
                success: function(data) {
                    $('#tampil').html(data);
                }
            });
        });
    });
    </script>

</body>

</html>