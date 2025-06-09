
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Kelas Kita</title>
  <link rel="stylesheet" href="Login.css" />
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <input type="text" id="username" placeholder="Nama Pengguna"><br>
    <input type="password" id="password" placeholder="Kata Sandi"><br>
    <button onclick="login()">Masuk</button>
  </div>

  <script>
    function login() {
      const user = document.getElementById('username');
      const pass = document.getElementById('password');

      if (user.value === "guru" && pass.value === "guru123") {
        localStorage.setItem("user", "guru");
        window.location.href = "Guru.php";
      } else if (user.value === "siswa" && pass.value === "belajar") {
        localStorage.setItem("user", "siswa");
        window.location.href = "index.php";
      } else {
        alert("Nama pengguna atau kata sandi salah!");
        user.value = "";
        pass.value = "";
        user.focus();
      }
    }
    
  </script>
  <script>
  // Deteksi tombol Enter saat di input login
  document.addEventListener("DOMContentLoaded", function () {
    const username = document.getElementById("username");
    const password = document.getElementById("password");

    [username, password].forEach((input) => {
      input.addEventListener("keyup", function (e) {
        if (e.key === "Enter") {
          document.getElementById("loginBtn").click();
        }
      });
    });
  });
</script>

</body>
</html>
