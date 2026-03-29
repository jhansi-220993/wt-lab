<?php
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFile = $targetDir . $fileName;

if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)){
    echo "File uploaded successfully.<br>";
    echo "<a href='index.php'>Back</a>";
} else {
    echo "Upload failed.";
}
?>