<?php

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_CMS = "localhost";
$database_CMS = "cms";
$username_CMS = "root";
$password_CMS = "";
$CMS = mysqli_connect($hostname_CMS, $username_CMS, $password_CMS) or trigger_error(mysqli_error(), E_USER_ERROR);
?>