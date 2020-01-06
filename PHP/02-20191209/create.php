<?php 
    $file = fopen("binh.txt", "w") or die("Can't open the file.");
    fwrite($file, "Vo Van Binh");
    fclose($file);
    echo readfile("binh.txt");
    echo "<br>";
?>
<?php
    $file = fopen("binh.txt", "a+") or die("Can't open the file");
    fwrite($file, "\nNews Watch Website");
    fclose($file);
    $file = fopen("binh.txt", "a+") or die("Can't open the file");
    while (!feof($file)) {
    echo fgets($file);
    echo "<br>";
    }
    fclose($file);
?>