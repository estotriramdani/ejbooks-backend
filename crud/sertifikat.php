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
        <th scope="col">Judul</th>
        <th scope="col">Penulis</th>
        <th scope="col">Kode</th>
        <th scope="col" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      include_once '../koneksi.php'; 
      $no = 1;
      $data = mysqli_query($koneksi,"SELECT * FROM sertifikat");
      while($d = mysqli_fetch_array($data)){
    ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $d['judul']; ?></td>
        <td><?= $d['penulis']; ?></td>
        <td><?= $d['kode_sertifikat']; ?></td>
        <td class="text-center">
          <a href="aksi_hapus_sertifikat.php?id=<?= $d['id']; ?>" class="btn btn-danger" onClick="return confirm('Yakin hapus?')">DELETE</a>
        </td>
      </tr>
      
    <?php $no++;} ?>
    </tbody>
  </table>
</div>
<?php include_once 'footer.php' ?>