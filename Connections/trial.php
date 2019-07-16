<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_trial = "localhost";
$database_trial = "ongc";
$username_trial = "root";
$password_trial = "";
$trial = mysql_pconnect($hostname_trial, $username_trial, $password_trial) or trigger_error(mysql_error(),E_USER_ERROR); 
?>