
<?php
include "dbtest.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    if ($username == "farmer" &&
        $email == "farmer@gmail.com" &&
        $password == "12345") {

        echo "<h2 style='color:green; text-align:center;'>Login Successful 🌱</h2>";
        echo "<p style='text-align:center;'>Welcome $username</p>";
    } else {
        echo "<h2 style='color:red; text-align:center;'>Login Failed ❌</h2>";
        echo "<p style='text-align:center;'>Invalid details</p>";
    }
}
?>
