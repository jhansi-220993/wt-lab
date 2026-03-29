<?php
$file = $_GET['file'];
$path = "uploads/" . $file;

if(file_exists($path)){
    echo "<h3>File Information</h3>";
    echo "File Name: ".$file."<br>";
    echo "File Size: ".filesize($path)." bytes<br>";
    echo "File Type: ".filetype($path)."<br>";
    echo "Last Access Time: ".date("Y-m-d H:i:s", fileatime($path))."<br>";
    echo "Last Modified Time: ".date("Y-m-d H:i:s", filemtime($path))."<br>";
    echo "Created Time: ".date("Y-m-d H:i:s", filectime($path))."<br>";
    echo "Permissions: ".fileperms($path)."<br>";
    echo "Owner: ".fileowner($path)."<br>";
    echo "Group: ".filegroup($path)."<br>";
    echo "Inode: ".fileinode($path)."<br>";
} else {
    echo "File not found.";
}

echo "<br><a href='index.php'>Back</a>";
?>