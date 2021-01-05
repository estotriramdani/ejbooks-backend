<?php
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
// menghapus data dari database
mysqli_query($koneksi,"delete from cover_slider where id_cover='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:cover_slider.php");
 
?>