<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ongcdetails = "localhost";
$database_ongcdetails = "ongc";
$username_ongcdetails = "root";
$password_ongcdetails = "";
$ongcdetails = mysqli_connect($hostname_ongcdetails, $username_ongcdetails, $password_ongcdetails) or trigger_error(mysql_error(),E_USER_ERROR); 
?>