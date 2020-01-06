<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "aptech_php_22_5_1";
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO aptech_php_22_5_1.users (name,email)
VALUES ('Binh', 'binh@gmail.com'),
		('An', 'an@gmail.com'),
    ('Hiep', 'hiep@gmail.com'),
    ('Quoc', 'quoc@gmail.com'),
    ('Thinh', 'thinh@gmail.com')";
if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
  $connect->close();        

?>