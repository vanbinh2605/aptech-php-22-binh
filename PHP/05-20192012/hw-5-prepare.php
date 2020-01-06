<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databasename = "binh_news";
$conn = mysqli_connect($serverName, $userName, $password);
if (!$conn) {
die("Connection failed : " . mysqli_connect_error());
}
$stmt = $conn->prepare("INSERT INTO binh_news.nnUser (LastName, FirstName, Email, Role)
VALUES (?,?,?,?)");
$stmt->bind-param("sssi", $LastName, $FirstName, $Email, $Role);
$LastName = 'AN';
$FirstName = 'Vo';
$Email = "anvo@gmail.com";
$Role = 2;
$stmt->execute();
echo "Using Prepared to insert new data successfully";
$stmt->close();
$conn->close();



?>