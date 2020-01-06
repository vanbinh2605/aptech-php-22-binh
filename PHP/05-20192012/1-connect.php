<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $connect = mysqli_connect($severname, $username, $password);
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>