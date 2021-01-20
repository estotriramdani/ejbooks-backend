<?php 

include_once '../koneksi.php';

function kodeSertifikat() {
  $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
  $string = '';

  for ($i = 0; $i < 9; $i++){
    $pos = rand(0, strlen($karakter)-1);
    $string .= $karakter[$pos];
  }
  return $string;
}

$nama = $_POST['nama'];
$judul = $_POST['judul'];
$tanggal = date('d-m-Y');
$kode_sertifikat = kodeSertifikat();
echo $nama. '<br>';
echo $judul. '<br>';
echo $tanggal. '<br>';

$sql = "INSERT INTO `sertifikat` (`id`, `judul`, `penulis`, `tanggal`, `kode_sertifikat`) VALUES ('', '$judul', '$nama' , '$tanggal', '$kode_sertifikat')";

$hasil = mysqli_query($koneksi, $sql);
//Kondisi apakah berhasil atau tidak
if ($hasil) {
  echo "<script>\n";
  echo "  alert('berhasil tambah data')\n";
  echo "  location.replace('index.php');\n";
	echo "</script>";
	exit;
}
else {
	echo "<script>\n";
  echo "  alert('gagal tambah data')\n";
  echo "  location.replace('index.php');\n";
  echo "</script>";
	exit;
}   

?>


?>