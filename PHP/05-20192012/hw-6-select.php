<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databasename = "binh_news";
$conn = mysqli_connect($serverName, $userName, $password);
if (!$conn) {
die("Connection failed : " . mysqli_connect_error());
}
$sql = "SELECT * FROM binh_news.nnUser limit 5";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "UserID : " . $row["Id"] . " - Full Name : " . $row["LastName"] . " " . $row["FirstName"] . " - Email : " . $row["Email"] . "<br>"; 
    }
} else {
    echo "0 results";
}
$conn->close();

?>