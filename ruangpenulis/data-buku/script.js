const searchButton = document.querySelector("#search-button");
const hasil = document.querySelector(".hasil");

searchButton.addEventListener("click", function () {
  const inputKeyword = document.querySelector(".input-keyword");
  fetch(
    "http://localhost/ejbooks-backend/ruangpenulis/api/cari.php?judul=" +
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
  <div class="col-sm-4">
    <div class="card" style="width: 18rem">
      <div class="card-header"><b>${h.judul}</b></div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Penulis: <b>${h.penulis}</b></li>
        <li class="list-group-item">Kode Sertifikat: <b>${h.kode_sertifikat}</b></li>
      </ul>
    </div>
  </div>
  `;
}
