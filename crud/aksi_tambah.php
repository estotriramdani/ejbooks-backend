<?php 
include '../koneksi.php';

$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$dimensi = $_POST['dimensi'];
$harga = $_POST['harga'];
$sinopsis = $_POST['sinopsis'];
$best_seller = $_POST['best_seller'];

// $ekstensi =  array('png','jpg','jpeg','gif');
$filename = 'gambar/'.$_FILES['cover']['name'];
// $ukuran = $_FILES['cover']['size'];
// $ext = pathinfo($filename, PATHINFO_EXTENSION);
 
move_uploaded_file($_FILES['cover']['tmp_name'], $filename);

$sql = "INSERT INTO `daftar_buku` (`id_buku`, `kategori`, `pengarang`, `judul`, `tahun`, `dimensi`, `harga`, `sinopsis`, `cover`, `best_seller`) VALUES ('', '$kategori', '$pengarang', '$judul', '$tahun', '$dimensi', '$harga', '$sinopsis', '$filename', '$best_seller')";

$hasil = mysqli_query($koneksi, $sql);
//Kondisi apakah berhasil atau tidak
if ($hasil) {
	echo "Berhasil insert data";
	exit;
}
else {
	echo "Gagal insert data";
	exit;
}  

?>