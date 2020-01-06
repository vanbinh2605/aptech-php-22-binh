<?php
setcookie('myName', 'Vo Van Binh',time() + 15);
if ($_COOKIE['myName']) {
    echo "Value of cookie myName is : " . $_COOKIE['myName'];
}



?>