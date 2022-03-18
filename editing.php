<?php
    include('config.php');
    $id=$_GET['id'];
    $query=mysqli_query($koneksi,"SELECT * FROM `tb_data` where id='$id'");
    $row=mysqli_fetch_array($query);

    $InputPlaceholder   = ["NRP","Nama","Pangkat","Sekolah","Korp","Kelamin","Umur"];
    $InputName          = ["nrp_siswa","nama_siswa","pangkat_siswa","sekolah_siswa","korp_siswa","kelamin_siswa",];
?>
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
    <div class="container pt-4">
        <h2>Edit</h2>
        <form method="POST" action="update.php?id=<?php echo $id; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <?php
                for ($i = 0,$j = 0; $i < count($InputPlaceholder),$j < count($InputName); $i++,$j++){?>
            <div class="pt-3">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><?php echo $InputPlaceholder[$i]?></span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" name="<?php echo $InputName[$j]?>"
                        value="<?php echo $row[$InputName[$j]]?>" required />
                </div>
            </div>
            <?php 
                }
                ?>
            <a class="btn btn-warning" href="edit.php">Back</a>
            <input class="btn btn-primary" type="submit" name="submit">
        </form>
    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>