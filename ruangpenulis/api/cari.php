<?php 

include_once '../koneksi.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset-UTF-8');

$judul = $_GET['judul'];
$judul_query = "%$judul%";
$data = mysqli_query($koneksi,"SELECT * FROM `sertifikat` WHERE judul LIKE '$judul_query'");
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