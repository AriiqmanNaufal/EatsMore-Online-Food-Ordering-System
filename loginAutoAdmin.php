<?php
$servername = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; // Mysql password
$dbName = "user"; // Database name
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Define $myusername and $mypassword
$myusername = $_POST['adminusername'];
$mypassword = $_POST['adminpassword'];
$sql = "SELECT adminName, adminPassword FROM admin WHERE adminName='$myusername' and
adminPassword='$mypassword'";
$result = $conn->query($sql);
// Mysql_num_row is counting table row
if ($result->num_rows > 0) {
    //redirect to file "adminMenu.php"
    header("location: loginAdmin.php");
} else {
    echo "<p>Wrong Username or Password. Please try again.";
}
$conn->close();
