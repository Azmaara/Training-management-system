 <?php require_once('Connections/trial.php'); ?>
 <?php  
 //$connect = mysql_connect("localhost", "root", "", "test_db");  
 $sql = "INSERT INTO tbl_sample(Name, Status) VALUES('".$_POST["first_name"]."', '".$_POST["Status"]."')";  
 
 if(mysql_query($sql,$trial ))  
 {  
      echo 'Data Inserted';  
 }  
 ?>  