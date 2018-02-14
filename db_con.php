<?php
$servername = "localhost";
$username = "admin";
$password = "lukasheterjagaberg";
$db = "blogg";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//SQL-QUERY
$sql = "SHOW TABLES";

if ($conn->$query($sql) === TRUE) {
  echo $sql;
} else {
  echo "Oh no. it didn't work!" . $conn->error;
}

$conn->close();
?>
