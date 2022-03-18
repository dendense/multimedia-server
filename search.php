<?php
    if (isset($_POST['search'])) {
        require_once 'config.php';

        $no = 1;
        $search = $_POST['search'];

        $query = mysqli_query($koneksi, "SELECT * FROM tb_data WHERE nama_siswa LIKE '%" . $search . "%'");
        while ($row = mysqli_fetch_object($query)) {
?>
<tr>
    <th scope="row"><?php echo $no++ ?></th>
    <td><?php echo $row->nama_siswa; ?></td>
    <td><?php echo $row->nrp_siswa; ?></td>
    <td><?php echo $row->pangkat_siswa; ?></td>
    <td><?php echo $row->umur_siswa; ?> Tahun</td>
    <td><?php echo $row->kelamin_siswa; ?></td>
</tr>
<?php }
} ?>