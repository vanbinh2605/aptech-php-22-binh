<?php
    $file = fopen("demo.php", "r") or die("Can't open file.");
    while (!feof($file)) {
    echo fgets($file) . "<br>";
    }
    fclose($file);
 ?>   