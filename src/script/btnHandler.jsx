const btnKamar = document.getElementById("btnKamar");
const btnPesawat = document.getElementById("btnPesawat");
const btnBantuan = document.getElementById("btnBantuan");
const btnTentang = document.getElementById("btnTentang");

btnKamar.addEventListener("click", () => {
  btnKamar.classList.add("bg-blue-500");
  btnPesawat.classList.remove("bg-blue-500");
  btnBantuan.classList.remove("bg-blue-500");
  btnTentang.classList.remove("bg-blue-500");
});

btnPesawat.addEventListener("click", () => {
  btnPesawat.classList.add("bg-blue-500");
  btnKamar.classList.remove("bg-blue-500");
  btnBantuan.classList.remove("bg-blue-500");
  btnTentang.classList.remove("bg-blue-500");
});

btnBantuan.addEventListener("click", () => {
  btnBantuan.classList.add("bg-blue-500");
  btnKamar.classList.remove("bg-blue-500");
  btnPesawat.classList.remove("bg-blue-500");
  btnTentang.classList.remove("bg-blue-500");
});

btnTentang.addEventListener("click", () => {
  btnTentang.classList.add("bg-blue-500");
  btnKamar.classList.remove("bg-blue-500");
  btnPesawat.classList.remove("bg-blue-500");
  btnBantuan.classList.remove("bg-blue-500");
});