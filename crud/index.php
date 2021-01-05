<?php include_once 'navbar.php' ?>


<div class="container">
  <div class="row mb-3 mt-3" style="position: relative;">
    <div class="col-sm">
      <h3>Daftar Buku</h3>
    </div>
    <div class="col-sm">
      <a href="tambah_buku.php" class="btn btn-success" style="position: absolute; right: 15px;">Tambah Data Buku</a>
    </div>
  </div>
  <table class="table table-striped" style="width: 100%; overflow-x: scroll;">
    <thead>
      <tr>
        <th>No</th>
        <th scope="col">Kategori</th>
        <th scope="col">Judul</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Tahun</th>
        <th scope="col" class="text-center">Best Seller</th>
        <th scope="col" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      include_once '../koneksi.php'; 
      $no = 1;
      $data = mysqli_query($koneksi,"select * from daftar_buku");
      while($d = mysqli_fetch_array($data)){
    ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $d['kategori']; ?></td>
        <td><?= $d['judul']; ?></td>
        <td><?= $d['pengarang']; ?></td>
        <td><?= $d['tahun']; ?></td>
        <td class="text-center"><?= $d['best_seller']; ?></td>
        <td class="text-center">
          <a href="ubah_buku.php?id=<?= $d['id_buku']; ?>" class="btn btn-warning">EDIT</a> 
          <a href="aksi_hapus.php?id=<?= $d['id_buku']; ?>" class="btn btn-danger" onClick="return confirm('Yakin hapus?')">DELETE</a>
        </td>
      </tr>
      
    <?php $no++;} ?>
    </tbody>
  </table>
</div>
<?php include_once 'footer.php' ?>