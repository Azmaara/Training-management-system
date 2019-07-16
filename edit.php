<?php require_once('Connections/trial.php'); ?>
 <?php  
 //$connect = mysql_connect("localhost", "root", "", "test_db");  
 $id = $_POST["id"];  
 $text = $_POST["text"];
 $column_name="Status";  
 $sql = "UPDATE tbl_sample SET Status='".$text."' WHERE CPF='".$id."'";  
 if(mysql_query($sql,$trial ))  
 {  
      echo 'Data Updated';  
 }  
 ?>  