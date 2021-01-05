<?php 

include_once '../../koneksi.php';
include_once '../header.php';

$data = mysqli_query($koneksi,"SELECT * FROM `daftar_buku` WHERE `best_seller`=1
");
while($d = mysqli_fetch_array($data)){
  $item[] = array(
    "id_buku" => $d['id_buku'],
    "kategori" => $d['kategori'],
    "pengarang" => $d['pengarang'],
    "judul" => $d['judul'],
    "tahun" => $d['tahun'],
    "dimensi" => $d['dimensi'],
    "harga" => $d['harga'],
    "sinopsis" => $d['sinopsis'],
    "cover" => $d['cover'],
    "best_seller" => $d['best_seller'],
  );
}

// $json = array(
//   'result' => 'success',
//   'item' => $item
// );

echo json_encode($item);

?>