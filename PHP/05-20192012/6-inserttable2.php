<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "aptech_php_22_5_1";
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO aptech_php_22_5_1.passports (code, ngay_cap, used_id)
VALUES (('Q9048334', '1999-11-20', 4),
('T9845743', '2000-10-19', 5),
('B3843722', '1999-09-18', 1),
('A8472942', '1999-08-17', 2),
('H4753464', '1999-07-16', 3)";
if ($connect->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}
$connect->close();
?>