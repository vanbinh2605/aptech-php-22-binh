<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$connect = mysqli_connect($serverName, $userName, $password);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE homework";
if (mysqli_query($connect, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($connect);
}
mysqli_close($connect); 
?>