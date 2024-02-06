<?php

$username = $_POST['username'];
$password = $_POST['password'];


include 'koneksi.php';
$sql   = "SELECT * FROM tb_pengguna
 WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksi, $sql);

if (mysqli_fetch_array($query)){
    header("location:lihat_tabel.php");
}else{
    echo"<script>alert('Maaf Anda Gagal Login');
    window.location.assign('login.php');</script>";
}