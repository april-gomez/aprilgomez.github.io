<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lc_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST["username"];
$password = $_POST["password"];

    
// Verify login credentials
$sql1 = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql1);

if ($result->num_rows == 1) {
    header("Location: home.html");
    exit();
} else {
    echo "<script>alert('Username or password incorrect');
    window.location = 'login.php';
    </script>";
}

$conn->close();

?>