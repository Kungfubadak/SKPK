<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda - Kelas Kita</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header class="header">
    <h1>SKPK Learning Place</h1>
  </header>

  <div class="nav-toggle-container">
    <button id="menu-toggle">☰ Menu</button>
    <div id="menu-items" class="menu-hidden">
      <a href="index.php">🏠 Home</a>
      <a href="materi.php">📂 Materi</a>
      <a href="pr-siswa.php">📝 PR Siswa</a>
      <a href="#" id="logout-link">🚪 Logout</a>
    </div>
  </div>  
  <main>
    <h2>Selamat Datang di Website Kelas Kita 🎓</h2>
    <p>Website ini tempat kita belajar bersama, mengakses tugas, dan materi 📚</p>
    <button id="sapa-button">Klik untuk Salam 👋</button>
  </main>

  <footer class="footer">&copy; 2025 SKPK Bisa</footer>

  <script src="code.js"></script>
</body>
</html>
