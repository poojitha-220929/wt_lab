
<?php
echo "string functions" . "<br>";
$str = " Hello, World! ";
echo "Original string:" . $str . "<br>";
// strlen
echo "Length of string: " . strlen($str) . "<br>";
//word count
echo "Word count: " . str_word_count($str) . "<br>";
//reverse string
echo "Reversed string: " . strrev($str) . "<br>";
echo "case conversion:" . "<br>";
//uppercase
echo "Uppercase: " . strtoupper($str) . "<br>";
//lowercase
echo "Lowercase: " . strtolower($str) . "<br>";
//ucfirst
echo "First letter uppercase: " . ucfirst(trim($str)) . "<br>";
//ucwords
echo "First letter of each word uppercase: " . ucwords(trim($str)) . "<br>";
echo "search and replace:" . "<br>";
//str_position
echo "Position of 'World': " . strpos($str, "World") . "<br>";
//str_replace
echo "Replace 'World' with 'PHP': " . str_replace("World", "PHP", $str) . "<br>";
echo "substring and trimming:" . "<br>";
//substring
echo "Substring (7, 5): " . substr($str, 7, 5) . "<br>";
//trim
echo "Trimmed string: '" . trim($str) . "'<br>";
//ltrim
echo "Left trimmed string: '" . ltrim($str) . "'<br>";
//rtrim
echo "Right trimmed string: '" . rtrim($str) . "'<br>";
echo "string comparison:" . "<br>";
$str1 = "Hello";
$str2 = "hello";
//strcmp
echo "Comparing 'Hello' and 'hello': " . strcmp($str1, $str2) . "<br>";
//strcasecmp
echo "Case-insensitive comparing 'Hello' and 'hello': " . strcasecmp($str1, $str2) . "<br>";
echo "special characters and security:" . "<br>";
$special="<script>alert('hello');</script>";
//htmlspecialchars
echo "Special characters: " . htmlspecialchars($special) . "<br>";
//addslashes
echo "Add slashes: " . addslashes("i am pooji") . "<br>";
?>
