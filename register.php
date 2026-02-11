
<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Invalid request");
}

$conn = mysqli_connect("localhost", "root", "poojivenu@929", "userdb");

if (!$conn) {
    die("Connection failed");
}

$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user_details (username, email, password)
        VALUES ('$username', '$email', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful ✅";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
