
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PR Siswa - Kelas Kita</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header class="header">
    <h1>📘 PR untuk Siswa</h1>
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

  <main class="container">
    <h3>Daftar PR yang Tersedia:</h3>
    <ul>
      <?php
      $dir = "pr_upload/";
      if (is_dir($dir)) {
        $files = scandir($dir);
        foreach ($files as $file) {
          if ($file !== "." && $file !== "..") {
            echo "<li><a href='pr_upload/$file' target='_blank'>$file</a></li>";
          }
        }
      } else {
        echo "<li>Belum ada PR tersedia.</li>";
      }
      ?>
    </ul>
  </main>

  <footer class="footer">&copy; 2025 SKPK</footer>
  <script src="code.js"></script>
</body>
</html>
