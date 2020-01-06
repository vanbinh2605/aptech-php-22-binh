<?php
session_start();
$_SESSION["myName"] = "Vo Van Binh";
$_SESSION["myProject"] = "News Website";
print_r($_SESSION);
session_destroy();



?>