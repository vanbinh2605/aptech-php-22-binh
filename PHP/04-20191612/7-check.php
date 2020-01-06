<?php
$email = $_POST['email'];
$lastname = $_POST['lastname'];
$serverName = "localhost";
$userName = "root";
$passwordDatabase = "";
$databaseName = "mydb";

$connect = mysqli_connect($serverName, $userName, $passwordDatabase, $databaseName);
if (!$connect){
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM mydb.MyGuests
WHERE email = '$email'
AND lastname = '$lastname'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "DANG NHAP THANH CONG";
} else {
    echo "DANG NHAP THAT BAI";
}

?>