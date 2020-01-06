<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $connect = mysqli_connect($severname, $username, $password);
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "CREATE DATABASE aptech_php_22_5_1";
    if (mysqli_query($connect,$sql)){
        echo "Database created succesfully";
    } else {
        echo "Error creating database: " . mysqli_connect_error();
    }
    mysqli_close($connect);
?>