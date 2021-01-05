
    <?php include_once 'navbar.php'; ?>

    <div class="container mb-4 mt-4">
      <h3>Tambah Data Buku</h3>
      <form action="aksi_tambah.php" method="post" enctype="multipart/form-data">

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Kategori</label>
          <div class="col-sm-10">
            <select name="kategori" id="" class="form-control">
              <option value="">Pilih Kategori</option>
              <option value="Kumpulan Puisi">Kumpulan Puisi</option>
              <option value="Novel">Novel</option>
              <option value="Kumpulan Cerpen">Kumpulan Cerpen</option>
              <option value="Umum">Umum</option>
            </select>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Pengarang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="pengarang">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="judul">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Tahun</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tahun">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Dimensi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="dimensi">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Harga</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="harga">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Sinopsis</label>
          <div class="col-sm-10">
            <textarea name="sinopsis" id="" rows="10" class="w-100 form-control"></textarea>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-2">
            <label>Cover</label>
          </div>
          <div class="col-sm-10">
            <input type="file" name="cover" required="required" />
          </div>
        </div>

        
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Best Seller</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="best_seller">
          </div>
        </div>

        <!-- <div class="form-group row">
          <label class="col-sm-2 col-form-label">Best Seller?</label>
          <div class="col-sm-10">
            <select name="best_seller" id="" class="form-control">
              <option value="0">Tidak</option>
              <option value="1">Ya</option>
            </select>
          </div>
        </div> -->
        <input type="submit" name="" value="Simpan" class="btn btn-primary" />
      </form>
    </div>
  

    <?php include_once 'footer.php'; ?>
