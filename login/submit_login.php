<?php
session_start();
include "koneksi.php";
$username= $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM tb_user WHERE username = '$username'";
$hasil = mysqli_query ($db_koneksi, $query);
$data = mysqli_fetch_array ($hasil);

$pengacak = 'jasin pembantai';

$passmd = md5 ($pengacak . md5 ($pass));
if ($passmd == $data ['password']){
    $_SESSION ['level'] = $data ['level'];
    $_SESSION ['username'] = $data ['username'];
    echo '<h2>Login Sukses</h2>';
    header ('location: admin.php');
} else {
    echo "<h1>Login Gagal</h1>";
}
?>