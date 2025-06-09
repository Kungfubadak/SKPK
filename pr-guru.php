<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PR Guru - Kelas Kita</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .note-text { font-style: italic; color: #333; margin-top: 5px; }
    .pr-entry { margin-bottom: 20px; }
    form.inline { display: inline-block; margin-left: 10px; }
  </style>
</head>
<body>
  <header class="header">
    <h1>📝 Kelola PR (Guru)</h1>
  </header>

  <div class="nav-toggle-container">
    <button id="menu-toggle">☰ Menu</button>
    <div id="menu-items" class="menu-hidden">
      <a href="index.php">🏠 Home</a>
      <a href="materi.php">📂 Materi</a>
      <a href="pr-guru.php">📝 PR Guru</a>
      <a href="pr-siswa.php">👨‍🎓 PR Siswa</a>
      <a href="#" id="logout-link">🚪 Logout</a>
    </div>
  </div>

  <main class="container">
    <h3>Upload PR Baru</h3>
    <form action="uploadPR.php" method="post" enctype="multipart/form-data">
      <input type="file" name="prfile" required />
      <input type="text" name="note" placeholder="Catatan singkat (opsional)" />
      <button type="submit">Upload</button>
    </form>

    <h3 style="margin-top: 40px;">📁 Daftar PR</h3>
    <ul>
      <?php
      $dir = "pr_upload/";
      if (is_dir($dir)) {
        $files = scandir($dir);
        foreach ($files as $file) {
          if ($file !== "." && $file !== ".." && !str_ends_with($file, ".note.txt")) {
            $noteFile = $dir . $file . ".note.txt";
            echo "<li class='pr-entry'>";
            echo "<a href='pr_upload/$file' target='_blank'>$file</a>";
            if (file_exists($noteFile)) {
              $note = file_get_contents($noteFile);
              echo "<div class='note-text'>📝 $note</div>";
            }
            echo "<form action='hapusPR.php' method='post' class='inline'>
                    <input type='hidden' name='file' value='$file' />
                    <button type='submit'>Hapus</button>
                  </form>";
            echo "</li>";
          }
        }
      } else {
        echo "<li>Belum ada PR yang diunggah.</li>";
      }
      ?>
    </ul>
  </main>

  <footer class="footer">&copy; 2025 SKPK</footer>
  <script src="code.js"></script>
</body>
</html>
