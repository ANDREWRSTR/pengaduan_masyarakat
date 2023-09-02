<?php 
session_start();
$nama = $_POST['username'];
$pw = $_POST['password'];
include "koneksi.php";

$query = $koneksi->query("select * from masyarakat where username='$nama' AND password='$pw' ");


$JumlahBaris = $query->rowCount();

if($JumlahBaris > 0){

    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['level'] = 'masyarakat';

    header("Location: table.php"); 
}
else{
    

$query = $koneksi->query("select * from petugas where username='$nama' AND password='$pw' ");

$JumlahBaris = $query->rowCount();

if($JumlahBaris > 0){

    $data = $query->fetch();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['level'] = $data['level'];

    header("Location: admin.php"); 
}
else{
        header("Location: login.php"); 
    }
    }

?>