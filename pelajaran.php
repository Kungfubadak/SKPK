
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pelajaran - Kelas Kita</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>
  
  <header class="header">
    <h1>Mata Pelajaran</h1>
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

  <div class="container">
    <ul>
      <li>📘 Bahasa Indonesia</li>
      <li>🧪 IPA</li>
      <li>📐 Matematika</li>
      <li>🌍 IPS</li>
      <li>🧕 PPKn</li>
    </ul>
      <!-- Script -->
  <script src="code.js"></script>
  </div>
</body>
</html>
