<?php

echo "<h3>File Modes Demo</h3>";

// r mode
$f = fopen("test.txt","r");
echo "Opened in r mode<br>";
fclose($f);

// w mode
$f = fopen("test.txt","w");
fwrite($f,"Written using w mode\n");
fclose($f);

// a mode
$f = fopen("test.txt","a");
fwrite($f,"Appended using a mode\n");
fclose($f);

// x mode
$f = fopen("newfile.txt","x");
fwrite($f,"Created using x mode\n");
fclose($f);

// r+
$f = fopen("test.txt","r+");
fwrite($f,"r+ mode\n");
fclose($f);

// w+
$f = fopen("test.txt","w+");
fwrite($f,"w+ mode\n");
fclose($f);

// a+
$f = fopen("test.txt","a+");
fwrite($f,"a+ mode\n");
fclose($f);

// x+
$f = fopen("newfile2.txt","x+");
fwrite($f,"x+ mode\n");
fclose($f);

echo "All file modes executed.";
?>