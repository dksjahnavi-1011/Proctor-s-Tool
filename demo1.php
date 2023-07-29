<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$dbname = "tool";

// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_SESSION["student"];
$sql = "SELECT * FROM student WHERE username='$user_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_assoc($result);
    // Access user data
    echo "ID: " . $user_data["usn"]. " - Name: " . $user_data["fname"]. " - Email: " . $user_data["email"]. "<br>";
} else {
    echo "No data found for the logged-in user.";
}

mysqli_close($conn);
?>
