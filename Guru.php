
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Guru - Kelas Kita</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <h1>Dashboard Guru</h1>
  </header>
  <div style="text-align: right; margin: 10px 20px;">
  <button onclick="logout()" class="logout-button">🚪 Logout</button>
</div>

f
  <div class="container">
    <!-- Manajemen Tugas -->
    <section>
      <h2>📝 Manajemen Tugas / PR</h2>
      <input type="text" id="judulPR" placeholder="Judul PR">
      <textarea id="deskripsiPR" placeholder="Deskripsi PR"></textarea>
      <button onclick="tambahPR()">Tambah PR</button>
      <ul id="daftarPR"></ul>
    </section>

    <!-- Upload Materi -->
    <section>
      <h2>📂 Upload Materi</h2>
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
      </form>
      <div>
        <h3>Materi Terupload:</h3>
        <ul>
          <?php
          $files = scandir("materi");
          foreach ($files as $file) {
            if ($file != "." && $file != "..") {
              echo "<li><a href='materi/$file' target='_blank'>$file</a></li>";
            }
          }
          ?>
        </ul>
      </div>
    </section>

    <!-- Tambah Jadwal -->
    <section>
      <h2>📅 Tambah Jadwal</h2>
      <input type="text" id="hari" placeholder="Hari (cth: Senin)">
      <input type="text" id="jam" placeholder="Jam (cth: 08.00 - 09.00)">
      <input type="text" id="pelajaran" placeholder="Mata Pelajaran">
      <button onclick="tambahJadwal()">Tambah Jadwal</button>
      <ul id="daftarJadwal"></ul>
    </section>
  </div>

  <script src="code.js"></script>
  
</body>
</html>
