<?php 

include_once '../koneksi.php';
include_once 'header.php';

$data = mysqli_query($koneksi,"SELECT * FROM `cover_slider`");
while($d = mysqli_fetch_array($data)){
  $item[] = array(
    "id_buku" => $d['id_cover'],
    "gambar" => $d['gambar'],
  );
}

// $json = array(
//   'result' => 'success',
//   'item' => $item
// );

echo json_encode($item);

?>