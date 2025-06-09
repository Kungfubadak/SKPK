<?php
$targetDir = "pr_upload/";
if (!is_dir($targetDir)) {
  mkdir($targetDir, 0777, true);
}
$targetFile = $targetDir . basename($_FILES["prfile"]["name"]);
$allowedTypes = ['pdf', 'docx', 'jpg', 'png'];
$note = isset($_POST["note"]) ? trim($_POST["note"]) : "";

$ext = pathinfo($targetFile, PATHINFO_EXTENSION);
if (in_array(strtolower($ext), $allowedTypes)) {
  if (move_uploaded_file($_FILES["prfile"]["tmp_name"], $targetFile)) {
    if ($note !== "") {
      file_put_contents($targetFile . ".note.txt", $note);
    }
    header("Location: pr-guru.php");
    exit();
  } else {
    echo "Gagal mengunggah file.";
  }
} else {
  echo "Tipe file tidak diizinkan.";
}
?>
