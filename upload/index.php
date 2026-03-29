<?php
$dir = "uploads/";
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
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>

<h2>Uploaded Files</h2>
<table border="1">
<tr>
    <th>File Name</th>
    <th>Size</th>
    <th>Last Modified</th>
    <th>Download</th>
    <th>Delete</th>
    <th>Info</th>
</tr>

<?php
foreach($files as $file){
    if($file != "." && $file != ".."){
        $path = $dir.$file;
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>".filesize($path)." bytes</td>";
        echo "<td>".date("Y-m-d H:i:s", filemtime($path))."</td>";
        echo "<td><a href='download.php?file=$file'>Download</a></td>";
        echo "<td><a href='delete.php?file=$file'>Delete</a></td>";
        echo "<td><a href='fileinfo.php?file=$file'>Info</a></td>";
        echo "</tr>";
    }
}
?>

</table>

</body>
</html>