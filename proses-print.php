<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print to Excel</title>
</head>

<body>
    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Siswa_Sejurba_Skadik501.xls");
	?>
    <div class="card card-body">
        <table border="1" class="table container">
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
                    <td>'<?php echo $data['nrp_siswa'] ?></td>
                    <td><?php echo $data['nama_siswa'] ?></td>
                    <td><?php echo $data['pangkat_siswa'] ?></td>
                    <td><?php echo $data['umur_siswa'] ?> Tahun</td>
                    <td><?php echo $data['kelamin_siswa'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>