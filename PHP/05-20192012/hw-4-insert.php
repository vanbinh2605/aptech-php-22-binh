<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databasename = "binh_news";
$conn = mysqli_connect($serverName, $userName, $password);
if (!$conn) {
die("Connection failed : " . mysqli_connect_error());
}
$sql = "INSERT INTO binh_news.nnUser (LastName, FirstName, Email, Role)
VALUES ('Binh', 'Vo', 'binhvo@gmail.com', 1)
( 'John', 'Cenna', 'cenna.john@hotmail.com', 2),
( 'Henry', 'Tran', 'tranhe@resolutioninc.com', 2),
('Christiaan', 'Hunter', 'ch.pageworth@pageworth.com', 1),
( 'Vicky', 'Nguyen', 'vicky06@gmail.com', 2)";
if ($conn->query($sql) === true){
    echo "Table nnUser created successfully";
} else {
    echo "Error creating table :" . $conn->error;
}
$conn->close();
?>