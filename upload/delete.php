<?php
$file = $_GET['file'];
$path = "uploads/" . $file;

if(file_exists($path)){
    unlink($path);
    echo "File deleted.<br>";
} else {
    echo "File not found.";
}

echo "<a href='index.php'>Back</a>";
?>