<?php
session_start();
include 'koneksi.php';
$fotoid = $_GET['fotoid'];
$userid = $_SESSION['userid'];

$ceksuka = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");

if (mysqli_num_rows($ceksuka) == 1) {
    while($row = mysqli_fetch_array($ceksuka)){
        $likeid = $row['likeid'];
        $query = mysqli_query($koneksi, "DELETE FROM likefoto WHERE likeid='$likeid'");
        // Hapus perintah redirect setelah unlike
        echo "<script>location.href='../admin/index.php';</script>";
    }
}else{
    $tanggallike = date('Y-m-d');
    $query = mysqli_query($koneksi, "INSERT INTO likefoto VALUES('','$fotoid','$userid','$tanggallike')");
    
    // Hapus perintah redirect setelah like
    echo "<script>location.href='../admin/index.php';</script>";
}

// Tambahkan perintah JavaScript untuk kembali ke halaman sebelumnya setelah proses like atau unlike selesai
echo "<script>window.history.back();</script>";
?>
``
