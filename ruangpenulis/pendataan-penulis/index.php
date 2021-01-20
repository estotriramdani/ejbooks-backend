<?php 
include_once '../koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM daftar_buku");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendataan Penulis</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="../">Ruang Penulis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../pendataan-penulis">Pendataan Penulis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../data-buku/">Data Buku</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../cek-sertifikat/">Sertifikat</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12">
          <h2 class="mt-4">Pendataan Penulis EJ Books</h2>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Sebelum mengisi data, cek terlebih judul buku Anda <a href="../data-buku/">di sini</a> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="aksi-pendataan.php" method="post">
            <div class="form-group">
              <label for="nama">Nama Penulis</label>
              <input type="text" class="form-control" name="nama" id="nama" />
            </div>
            <div class="form-group">
              <label for="judul">Judul Buku</label>
              <select class="form-control" id="judul" name="judul">
                <option>Pilih Judul Buku</option>
                <?php  while ( $row = mysqli_fetch_assoc($result)){ ?>
                <option value="<?= $row['judul']; ?>"><?= $row['judul']; ?></option>
                <?php } ?>
              </select>
            </div>
            <button
              type="submit"
              class="btn btn-primary"
              onClick="return confirm('Yakin data sudah benar?')"
            >
              Submit
            </button>
            <small class="form-text text-muted"
              >Jika penulis telah menerbitkan lebih dari dua buku, silakan
              masukan data buku tersebut setelah memasukkan data ini</small
            >
          </form>
        </div>
      </div>
    </div>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
