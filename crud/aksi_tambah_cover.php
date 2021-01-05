<?php 
include '../koneksi.php';

// $ekstensi =  array('png','jpg','jpeg','gif');
$filename = 'cover_slider/'.$_FILES['gambar']['name'];
// $ukuran = $_FILES['cover']['size'];
// $ext = pathinfo($filename, PATHINFO_EXTENSION);
echo "$filename"; 

move_uploaded_file($_FILES['gambar']['tmp_name'], $filename);

$sql = "INSERT INTO `cover_slider` (`id_cover`, `gambar`) VALUES ('', '$filename')";

$hasil = mysqli_query($koneksi, $sql);
//Kondisi apakah berhasil atau tidak
if ($hasil) {
  echo "berhasil";
  echo "<script>\n";
  echo "  alert('berhasil tambah cover slider')\n";
  echo "  location.replace('cover_slider.php');\n";
	echo "</script>";
	exit;
}
else {
  echo "gagal";
	echo "<script>\n";
  echo "  alert('gagal tambah cover slider')\n";
  echo "  location.replace('cover_slider.php');\n";
  echo "</script>";
	exit;
}   

?>