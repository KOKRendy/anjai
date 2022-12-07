<?php
$host ="localhost";
$user ="root";
$password="";
$database="db_latihan";
$koneksi=mysqli_connect($host, $user, @$pass);
$db_koneksi = mysqli_connect ($host, $user, $password, $database);
?>