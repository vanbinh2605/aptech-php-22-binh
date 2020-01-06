<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$conn = mysqli_connect($serverName, $userName, $password);
if (!$conn) {
die("Connection failed : " . mysqli_connect_error());
}
$sql = "CREATE DATABASE binh_news";
if ($conn->query($sql) === true){
    echo "Database created successfully";
} else {
    eho("Error creating database : " . $conn->error);
}
$conn->close();
?>