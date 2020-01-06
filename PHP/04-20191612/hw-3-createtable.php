<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "homework";
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE homework.myname (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(255) NOT NULL,
Email VARCHAR(255) NOT NULL
)";
if (mysqli_query($connect, $sql)) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . mysqli_error($connect);
}
mysqli_close($connect); 
?>