<?php include_once 'navbar.php' ?>


<div class="container">
  <div class="row mb-3 mt-3" style="position: relative;">
    <div class="col-sm">
      <h3>Daftar Cover</h3>
    </div>
    <div class="col-sm">
      <a href="tambah_cover_slider.php" class="btn btn-success" style="position: absolute; right: 15px;">Tambah Cover Slider</a>
    </div>
  </div>
  <table class="table table-striped" style="width: 100%; overflow-x: scroll;">
    <thead>
      <tr>
        <th>No</th>
        <th scope="col">Cover</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      include_once '../koneksi.php'; 
      $no = 1;
      $data = mysqli_query($koneksi,"select * from cover_slider");
      while($d = mysqli_fetch_array($data)){
    ?>
      <tr>
        <td><?= $no; ?></td>
        <td>
          <div class="cover-thumb">
            <img src="<?= $d['gambar']; ?>" alt="">
          </div>
        </td>
        <td class="">
          <a href="aksi_hapus_cover.php?id=<?= $d['id_cover']; ?>" class="btn btn-danger" onClick="return confirm('Yakin hapus?')">DELETE</a>
        </td>
      </tr>
      
    <?php 
      $no++;
    }
     ?>
    </tbody>
  </table>
</div>
<?php include_once 'footer.php' ?>