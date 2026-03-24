
<?php
// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Clean input using string functions
    $name = trim($_POST["name"]);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);

    $email = trim($_POST["email"]);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);

    $username = trim($_POST["username"]);
    $username = stripslashes($username);
    $username = htmlspecialchars($username);

    $password = trim($_POST["password"]);
    $password = stripslashes($password);

    // 2. Validate input length
    if (strlen($name) < 3 || strlen($name) > 50) {
        die("Error: Name must be between 3 and 50 characters.");
    }
    if (strlen($username) < 3 || strlen($username) > 20) {
        die("Error: Username must be between 3 and 20 characters.");
    }
    if (strlen($password) < 6) {
        die("Error: Password must be at least 6 characters long.");
    }

    // 3. Format username and name properly
    $name = ucwords(strtolower($name));      // Capitalize first letters
    $username = strtolower($username);       // Username all lowercase

    // 4. Display cleaned and formatted data
    echo "<h3>Registration Successful!</h3>";
    print "Name: " . $name . "<br>";
    print "Email: " . $email . "<br>";
    print "Username: " . $username . "<br>";
    print "Password: " . str_repeat("*", strlen($password)); // hide actual password
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Farmer Registration</title>
</head>

<body>
    <h2>Farmer Registration Form</h2>
<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Register">
</form>
</body>
