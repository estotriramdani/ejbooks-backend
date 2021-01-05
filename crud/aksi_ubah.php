<?php 
include '../koneksi.php';
$id_buku = $_POST['id_buku'];
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

$sql = "UPDATE daftar_buku set kategori='$kategori', pengarang='$pengarang', judul='$judul',tahun='$tahun', dimensi='$dimensi', harga='$harga', sinopsis='$sinopsis',best_seller='$best_seller' WHERE id_buku='$id_buku'";

$hasil = mysqli_query($koneksi, $sql);
  if ($hasil) {
    echo "<script>\n";
    echo "  alert('berhasil ubah data')\n";
    echo "  location.replace('index.php');\n";
    echo "</script>";
    exit;
  }
  else {
  	echo "<script>\n";
    echo "  alert('gagal ubah data')\n";
    echo "  location.replace('index.php');\n";
    echo "</script>";
  	exit;
  }  

?>