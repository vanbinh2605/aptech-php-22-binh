<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "homework";
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
$sql = "INSERT INTO homework.myname (Name, Email)
VALUES ('Dr. Orlando Kilback','odurgan@example.org'),
('Lionel Kulas','era44@example.com'),
('Tessie Mayert','sawayn.emely@example.org'),
('Mr. David Stehr','josianne38@example.com'),
('Carey Schoen','rippin.gwendolyn@example.net'),
('Nicola Kemmer','fahey.herta@example.com'),
('Mr. Zechariah Windler','nelle68@example.com'),
('Prof. Treva Doyle','bertha70@example.com'),
('Mr. Jabari Armstrong DDS','hubert.bergnaum@example.com')";
if ($connect->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}
$connect->close(); 
?>