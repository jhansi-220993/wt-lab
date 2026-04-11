<?php
$dir = "uploads/";

// Create folder if not exists
if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}

$files = scandir($dir);
?>