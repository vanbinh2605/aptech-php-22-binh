<?php
$file = fopen("binh.txt, w") or die("Can't open the file.");
fwrite($file, "Võ Văn Bình");
fclose($file);
echo readfile("binh.txt");
?>