 <?php  
$hostname_trial = "localhost";
$database_trial = "ongc";
$username_trial = "root";
$password_trial = "";
$trial = mysql_pconnect($hostname_trial, $username_trial, $password_trial) or trigger_error(mysql_error(),E_USER_ERROR); 
 //$connect = mysqli_connect("localhost", "root", "", "test_db");  
 $sql = "DELETE FROM tbl_sample WHERE CPF = '".$_POST["id"]."'";  
 if(mysql_query( $sql,$trial))  
 {  
      echo 'Data Deleted';  
 }  
 ?>  