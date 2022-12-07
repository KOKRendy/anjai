<?php
$username = $_POST ['username'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$level = "user";

if ($pass1 == $pass2){
    include "koneksi.php";
    $pengacak = "jasin pembantai";
    $passmd = md5 ($pengacak . md5 ($pass1));
    $query = "INSERT INTO tb_user VALUES ('$username', '$passmd', '$level')";
    $hasil = mysqli_query ($db_koneksi, $query);
    if ($hasil){
        echo "User berhasil di daftarkan";
        echo "Daftar Ekstrakulikuler sekarang";
        echo "<a href='form_ekstrakulikuler.php'> Daftar Sekarang</a>";
    } else {
        echo "Nama username sudah digunakan";
    }
}
else echo "Password yang dimasukkan tidak sama";
?>