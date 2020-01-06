<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "homework";
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM homework.myname";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"] . " - " . $row["Name"] . " - " . $row["Email"] . "<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($connect);
?>