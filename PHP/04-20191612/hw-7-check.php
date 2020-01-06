<h2>Danh sach users đã đăng ký</h2>
<table align ="left" border="1" cellpadding="3" cellspacing="0">  
    <thead>
        <th>id</th>
        <th>email</th>
        <th>password</th>
        <th>name</th>
    </thead>
</table>



<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$serverName = "localhost";
$userName = "root";
$passwordDatabase = "";
$databaseName = "homework";
$connect = mysqli_connect($serverName, $userName, $passwordDatabase, $databaseName);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM homework.myname
 WHERE Name = '$name'
 AND Email = '$email'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "DANG NHAP THANH CONG";
} else {
  echo "DANG NHAP THAT BAI";
} 
?>