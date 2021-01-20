const searchButton = document.querySelector("#search-button");
const hasil = document.querySelector(".hasil");

searchButton.addEventListener("click", function () {
  const inputKeyword = document.querySelector(".input-keyword");
  fetch(
    "http://localhost/ejbooks-backend/ruangpenulis/api/sertifikat.php?sertifikat=" +
      inputKeyword.value
  )
    .then((res) => res.json())
    .then((res) => {
      let card = "";
      res.forEach((res) => {
        card += showHasil(res);
        hasil.innerHTML = card;
      });
    });
});

function showHasil(h) {
  return `
  <div class="sertifikat-wrapper shadow">
    <div class="layer"></div>
    <div class="kiri-atas">
      <img src="img/sudut kiri atas.svg" alt="" />
    </div>
    <div class="kiri-bawah">
      <img src="img/sudut kiri bawah.svg" alt="" />
    </div>
    <div class="kanan-bawah">
      <img src="img/sudut kanan bawah.svg" alt="" />
    </div>
    <div class="kanan-atas">penerbit-ejbooks.my.id</div>
    <div class="serifikat-isi">
      <div class="judul">SERTIFIKAT PENULIS</div>
      <div class="kode">Kode Sertifikat: ${h.kode_sertifikat}</div>
      <div class="diberikan">Diberikan Kepada</div>
      <div class="nama">${h.penulis}</div>
      <div class="garis-1"></div>
      <div class="sebagai">sebagai penulis buku berjudul</div>
      <div class="judul-buku">${h.judul}</div>
      <div class="tanggal">Bandung, ${h.tanggal}</div>
      <div class="tanda-tangan">
        <div class="owner">Owner EJ Books</div>
        <div class="ttd">
          <img src="img/tanda-tangan biru 1.png" alt="" />
        </div>
        <div class="logo">
          <img src="img/logo-nav-hitam 1.png" alt="" />
        </div>
        <div class="nama-owner">Esto Triramdani Nurlustiawan</div>
      </div>
      <br />
    </div>
  </div>
  `;
}
