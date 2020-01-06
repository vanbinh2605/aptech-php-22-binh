<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$databasename = "binh_news";
$conn = mysqli_connect($serverName, $userName, $password);
if (!$conn) {
die("Connection failed : " . mysqli_connect_error());
}
$sql = "CREATE TABLE binh_news.nnUser(
    Id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    LastName varchar(255),
    FirstName varchar(255),
    Email varchar(255) NOT NULL UNIQUE,
    Role int NOT NULL DEFAULT 2,
    State int NOT NULL DEFAULT 1,
    CreatedDate datetime NOT NULL DEFAULT NOW(),
    ModifiedDate datetime
    )";
if($conn->query($sql) === true){
    echo "Table nnUser created successfully";
} else {
    echo "Error creating table : " . $conn->error;
}
$conn->close();

?>