    <?php
    	$id=$_GET['id'];
    	include('config.php');
    	mysqli_query($koneksi,"DELETE FROM `tb_data` WHERE id='$id'");
    	header('location:edit.php');
    ?>