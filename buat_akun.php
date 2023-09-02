<?php

$nik = $_POST ['nik'];
$nama = $_POST ['nama'];
$user = $_POST ['username'];
$no = $_POST ['nomor_telepon'];
$pw = $_POST ['sandi'];

include 'koneksi.php';

$koneksi->query("insert into masyarakat values('$nik', '$nama', '$user', '$pw', '$no')");

header("location:login.php")

?>