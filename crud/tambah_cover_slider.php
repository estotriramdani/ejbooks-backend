
    <?php include_once 'navbar.php'; ?>

    <div class="container mb-4 mt-4">
      <h3 class="mb-4">Tambah Cover Slider</h3>
      <form action="aksi_tambah_cover.php" method="post" enctype="multipart/form-data">

        <div class="form-group row">
          <div class="col-sm-2">
            <label>Gambar</label>
          </div>
          <div class="col-sm-10">
            <input type="file" name="gambar" required="required" />
          </div>
        </div>

        <input type="submit" name="" value="Simpan" class="btn btn-primary" />
      </form>
    </div>
  

    <?php include_once 'footer.php'; ?>
