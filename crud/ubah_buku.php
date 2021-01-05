
    <?php include_once 'navbar.php'; ?>

    <div class="container mb-4 mt-4">
      <h3>Tambah Data Buku</h3>

      <?php
        include_once '../koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from daftar_buku where id_buku='$id'");
        while($d = mysqli_fetch_array($data)){
		  ?>

      <form action="aksi_ubah.php" method="post" enctype="multipart/form-data">

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Kategori</label>
          <div class="col-sm-10">
            <select name="kategori" id="" class="form-control">
              <option value="">Pilih Kategori</option>
              <option <?php if ($d['kategori'] == 'Kumpulan Puisi'){echo "selected";} ?> value="Kumpulan Puisi">Kumpulan Puisi</option>
              <option <?php if ($d['kategori'] == 'Novel'){echo "selected";} ?> value="Novel">Novel</option>
              <option <?php if ($d['kategori'] == 'Kumpulan Cerpen'){echo "selected";} ?> value="Kumpulan Cerpen">Kumpulan Cerpen</option>
              <option <?php if ($d['kategori'] == 'Umum'){echo "selected";} ?> value="Umum">Umum</option>
            </select>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Pengarang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="pengarang" value="<?= $d['pengarang']; ?>">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="judul" value="<?= $d['judul']; ?>">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Tahun</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tahun" value="<?= $d['tahun']; ?>">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Dimensi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="dimensi" value="<?= $d['dimensi']; ?>">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Harga</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="harga" value="<?= $d['harga']; ?>">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Sinopsis</label>
          <div class="col-sm-10">
            <textarea name="sinopsis" id="" rows="10" class="w-100 form-control"><?= $d['sinopsis']; ?></textarea>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-2">
            <label>Cover</label>
          </div>
          <div class="col-sm-10">
            <input type="file" name="cover" />
          </div>
        </div>

        
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Best Seller</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="best_seller" value="<?= $d['best_seller']; ?>">
          </div>
        </div>
        
        <input type="hidden" name="id_buku" value="<?= $d['id_buku']; ?>">

        <input type="submit" name="" value="Simpan" class="btn btn-primary" />
      </form>
      <?php } ?>
    </div>

    <?php include_once 'footer.php'; ?>
