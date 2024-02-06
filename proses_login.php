<?php

$username = $_POST['username'];
$password = $_POST['password'];


include 'koneksi1.php';
$sql   = "SELECT * FROM tbl_login
 WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksi, $sql);

if (mysqli_fetch_array($query)){
    header("location:home.php");
}else{
    echo"<script>alert('Maaf Anda Gagal Login');
    window.location.assign('login.php');</script>";
}