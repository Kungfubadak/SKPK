
<?php
$targetDir = "materi/";
if (!is_dir($targetDir)) {
  mkdir($targetDir, 0777, true);
}
$targetFile = $targetDir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
header("Location: guru.php");
?>
