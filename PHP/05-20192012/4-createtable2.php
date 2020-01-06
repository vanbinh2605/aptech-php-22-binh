<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "aptech_php_22_5_1";
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE aptech_php_22_5_1.passports(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(255) UNIQUE,
    ngay_cap DATE,
    users_id INT);
)";
if (mysqli_query($connect, $sql)) {
    echo "Table users created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($connect);
  }
  mysqli_close($connect); 
?>