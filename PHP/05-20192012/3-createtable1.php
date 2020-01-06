<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "aptech_php_22_5_1";
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE aptech_php_22_5_1.users(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE 
)";
if (mysqli_query($connect, $sql)) {
    echo "Table users created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($connect);
  }
  mysqli_close($connect); 
?>