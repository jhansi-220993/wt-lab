<?php
$dir = "uploads/";

// Check if directory exists
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

$files = scandir($dir);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini File Manager</title>
</head>
<body>

<h2>File Upload</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file:
    <input type="file" name="file" required>
    <input type="submit" value="Upload">
</form>

<h2>Uploaded Files</h2>

<table border="1" cellpadding="10">
<tr>
    <th>File Name</th>
    <th>Size</th>
    <th>Last Modified</th>
    <th>Download</th>
    <th>Delete</th>
    <th>Info</th>
</tr>

<?php
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        $path = $dir . $file;

        // Check if it's a file (not folder)
        if (is_file($path)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($file) . "</td>";
            echo "<td>" . filesize($path) . " bytes</td>";
            echo "<td>" . date("Y-m-d H:i:s", filemtime($path)) . "</td>";
            echo "<td><a href='download.php?file=" . urlencode($file) . "'>Download</a></td>";
            echo "<td><a href='delete.php?file=" . urlencode($file) . "' onclick='return confirm(\"Delete this file?\")'>Delete</a></td>";
            echo "<td><a href='fileinfo.php?file=" . urlencode($file) . "'>Info</a></td>";
            echo "</tr>";
        }
    }
}
?>

</table>

</body>
</html>