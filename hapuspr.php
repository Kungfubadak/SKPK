<?php
$dir = "pr_upload/";
$file = isset($_POST['file']) ? basename($_POST['file']) : '';
$target = $dir . $file;
$note = $target . ".note.txt";
if (file_exists($target)) unlink($target);
if (file_exists($note)) unlink($note);
header("Location: pr-guru.php");
exit();
?>
