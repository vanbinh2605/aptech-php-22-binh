<?php
$file = fopen("binh.txt", "a+") or die ("Can't open the file");
fwrite($file, "\nNews Wesite");
fclose($file);

$file = fopen("binh.txt", "a+") or die ("Can't open the file");
while (!feof($file)){
    echo fgets($file) . "br";
}
fclose($file);
?>