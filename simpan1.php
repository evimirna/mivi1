<?php

$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi1.php';
$sql = "INSERT INTO tbl_login (username, password) values
 ('$username', '$password')";

$query = mysqli_query ($koneksi, $sql);
if ($query){
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan');
        window.location='login.php';
</script>
<?php
}
?>