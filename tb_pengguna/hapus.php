<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "DELETE FROM tb_pengguna where no='$id'";
$query = mysqli_query ($koneksi, $sql);

if ($query){
   ?>
   <script type="text/javascript">
       alert ('Data Berhasil Dihapus');
       window.location='lihat_tabel.php';
       </script>
       <?php
}
?>