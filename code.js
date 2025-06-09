// ========================
// FUNGSI LOGOUT
// ========================
function logout() {
  if (confirm("Yakin ingin logout?")) {
    localStorage.clear();
    window.location.href = "login.php";
  }
}

// ========================
// FUNGSI TAMPILKAN PR
// ========================
function tampilkanPR() {
  const listEl = document.getElementById("daftarPR");
  if (!listEl) return;

  const daftar = JSON.parse(localStorage.getItem("dataPR")) || [];
  listEl.innerHTML = "";

  if (daftar.length === 0) {
    listEl.innerHTML = "<li><em>Belum ada PR yang ditambahkan.</em></li>";
  } else {
    daftar.forEach((pr, index) => {
      const li = document.createElement("li");
      li.innerHTML = `<strong>${pr.judul}</strong><br>${pr.deskripsi}`;

      const user = localStorage.getItem("user");
      if (user === "guru") {
        const btnHapus = document.createElement("button");
        btnHapus.textContent = "Hapus";
        btnHapus.onclick = () => hapusPR(index);
        li.appendChild(document.createElement("br"));
        li.appendChild(btnHapus);
      }

      listEl.appendChild(li);
    });
  }

  // Tampilkan jumlah PR jika elemen tersedia
  const jumlahEl = document.getElementById("jumlahPR");
  if (jumlahEl) {
    jumlahEl.textContent = `Total PR: ${daftar.length}`;
  }
}

// ========================
// FUNGSI TAMBAH PR
// ========================
function tambahPR() {
  const judulEl = document.getElementById("judulPR");
  const deskripsiEl = document.getElementById("deskripsiPR");

  if (!judulEl || !deskripsiEl) return;

  const judul = judulEl.value.trim();
  const deskripsi = deskripsiEl.value.trim();

  if (judul === "" || deskripsi === "") {
    alert("Isi semua kolom!");
    return;
  }

  const daftar = JSON.parse(localStorage.getItem("dataPR")) || [];
  daftar.push({ judul, deskripsi });
  localStorage.setItem("dataPR", JSON.stringify(daftar));

  alert("PR berhasil ditambahkan!");
  judulEl.value = "";
  deskripsiEl.value = "";
  tampilkanPR();
}

// ========================
// FUNGSI HAPUS PR
// ========================
function hapusPR(index) {
  const daftar = JSON.parse(localStorage.getItem("dataPR")) || [];
  daftar.splice(index, 1);
  localStorage.setItem("dataPR", JSON.stringify(daftar));
  tampilkanPR();
}

// ========================
// FUNGSI SAAT HALAMAN DIBUKA
// ========================
window.onload = function () {
  const user = localStorage.getItem("user");

  if (!user) {
    alert("Silakan login terlebih dahulu.");
    window.location.href = "login.php";
    return;
  }

  const formPR = document.getElementById("formPR");
  const daftarPR = document.getElementById("daftarPR");

  if (formPR && user === "guru") {
    formPR.style.display = "block";
  }

  if (daftarPR) {
    tampilkanPR();
  }

  const sapaBtn = document.getElementById("sapa-button");
  if (sapaBtn) {
    sapaBtn.addEventListener("click", sapaKelas);
  }
};

// ========================
// FUNGSI MENU TOGGLE & LOGOUT
// ========================
document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("menu-toggle");
  const menu = document.getElementById("menu-items");
  if (toggleBtn && menu) {
    toggleBtn.addEventListener("click", function () {
      menu.classList.toggle("menu-hidden");
    });
  }

  const logoutBtn = document.getElementById("logout-link");
  if (logoutBtn) {
    logoutBtn.addEventListener("click", function (e) {
      e.preventDefault();
      logout();
    });
  }
});

// ========================
// FUNGSI SALAM
// ========================
function sapaKelas() {
  alert("Halo Kelas Kita! Semangat belajar hari ini! 📚");
}
