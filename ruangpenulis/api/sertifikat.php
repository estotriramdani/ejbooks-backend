<?php 

include_once '../koneksi.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset-UTF-8');

$sertifikat = $_GET['sertifikat'];
$sertifikat_query = "%$sertifikat%";
$data = mysqli_query($koneksi,"SELECT * FROM `sertifikat` WHERE kode_sertifikat LIKE '$sertifikat_query'");
while($d = mysqli_fetch_array($data)){
  $item[] = array(
    "id" => $d['id'],
    "judul" => $d['judul'],
    "penulis" => $d['penulis'],
    "tanggal" => $d['tanggal'],
    "kode_sertifikat" => $d['kode_sertifikat'],
  );
}

// $json = array(
//   'result' => 'success',
//   'item' => $item
// );

echo json_encode($item);

?>