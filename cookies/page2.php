<?php
setcookie("user_name", "", time() - 3600);
echo 'Hello, ' . $_COOKIE[ 'user_name' ];

?>