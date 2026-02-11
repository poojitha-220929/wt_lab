
<?php
echo "php datatypes"."<br>";
$name = "John";
echo "string:". $name."<br>";
$age = 30;
echo "integer:". $age."<br>";
$height = 5.9;      
echo "float:". $height."<br>";
$is_student = false;
echo "boolean:". $is_student."<br>";
var_dump($is_student);
$fruits = array("apple", "banana", "cherry");
echo "array:"."<br>";
print_r($fruits);
echo "<br>";
echo "<local scope>"."<br>";
function localScope() {
    $localVar = "I am local";
    echo $localVar."<br>";
}
localScope();
echo "<global scope>"."<br>";
$globalVar = "I am global";
function globalScope() {
    global $globalVar;
    echo $globalVar."<br>";
}
globalScope();
echo "<static scope>"."<br>";
function staticScope() {
    static $count = 0;
    $count++;
    echo "Static count: " . $count . "<br>";
}
staticScope();
staticScope();
staticScope();
?>
