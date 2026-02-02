<?php
$name = "Jhansi";
$age = 21;
$height = 5.4;

echo "<h2>PHP Variables</h2>";
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height <br><br>";

define("COLLEGE", "ABC Engineering College");
const COURSE = "Web Technologies";

echo "<h2>PHP Constants</h2>";
echo "College: " . COLLEGE . "<br>";
echo "Course: " . COURSE . "<br><br>";

$integer = 100;           // Integer
$float = 10.5;            // Float
$string = "PHP Language"; // String
$boolean = true;          // Boolean
$array = array("HTML", "CSS", "PHP"); // Array
$nullValue = null;        // NULL

echo "<h2>PHP Data Types</h2>";
var_dump($integer);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($string);
echo "<br>";
var_dump($boolean);
echo "<br>";
var_dump($array);
echo "<br>";
var_dump($nullValue);
echo "<br><br>";

$str1 = "Hello";
$str2 = "PHP";

echo "<h2>PHP Strings</h2>";

// Concatenation
echo "Concatenation: " . $str1 . " " . $str2 . "<br>";

// String Length
echo "Length of string: " . strlen($str2) . "<br>";

// String Position
echo "Position of 'PHP': " . strpos("I love PHP", "PHP") . "<br>";

// String Replace
echo "Replace: " . str_replace("PHP", "Web", "PHP Programming") . "<br>";

// Uppercase & Lowercase
echo "Uppercase: " . strtoupper($str1) . "<br>";
echo "Lowercase: " . strtolower($str2) . "<br>";

?>
