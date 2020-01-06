<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($severname, $username, $password);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>