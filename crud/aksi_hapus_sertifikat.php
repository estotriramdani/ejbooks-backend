<?php
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from sertifikat where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:sertifikat.php");
 
?>