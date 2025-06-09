
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal - Kelas Kita</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>
  
  <header class="header">
    <h1>Jadwal Pelajaran</h1>
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


    </div>
  <div class="container">
    <ul>
      <li>Senin: Bahasa Indonesia, Matematika</li>
      <li>Selasa: IPA, IPS</li>
      <li>Rabu: PPKn, Bahasa Inggris</li>
      <li>Kamis: Seni Budaya, PJOK</li>
      <li>Jumat: Prakarya, Agama</li>
    </ul>
  </div>
    <!-- Script -->
  <script src="code.js"></script>
</body>
</html>
