<?php require_once('Connections/trial.php'); ?>
<?php
 $temp="";
 if(isset($_POST['sel'])){
 $temp=$_POST['sel'];
 }
?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_trial, $trial);
$query_Recordset2 = "SELECT * FROM training";
$Recordset2 = mysql_query($query_Recordset2, $trial) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

mysql_select_db($database_trial, $trial);
$query_Recordset1 = "SELECT * FROM tbl_sample where Training_Date_From='$temp' and Status='Confirmed'";
$Recordset1 = mysql_query($query_Recordset1, $trial) or die(mysql_error());
//$row_Recordset1 = mysql_fetch_assoc($Recordset1);
//$totalRows_Recordset1 = mysql_num_rows($Recordset1);

 ?>
     
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="design.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
<h3 align="center">SEARCH RESULTS:</h3>
</head>

<body>

   
                  <div class="container"> 
                
                             <form action="search.php" method="POST">
                             <label for="training"><font size="3" color="Black"><style="font-family:'Courier New'"></label>
					     <select class="form-control" id="training" name="sel">
							    <option>Select Date:</option>
							    <?php
                               while($row_Recordset2 = mysql_fetch_assoc($Recordset2)){ 
							   $temp=$row_Recordset2['Training_Date_From'];?>
							    <br />  
							    <br />
							    <option value="<?php echo $row_Recordset2['Training_Date_From']; ?>"><?php echo $row_Recordset2['Training_Date_From']; ?></option>
							    <?php 
                                }
								?>
						      </select>
							 
                             
						
                         <br /> 
						 <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger" style="float:right">                         SEARCH</button></div>
                         </form>
                         </div >
                         </div>
                     <br />  
                     <br />  
                     <br />
                     <br />  
                     <br />
        <style>
		table {
			border-collapse:collapse;
			width: 60%;
			margin-left:auto;
			margin-right:auto;
			alignment-adjust:central;
			}
			th,td {
				padding:8px;
                font color:Black;
                }
				tr:nth-child(even){background-color: #f2f2f2}
				th{background-color: #4CAF50;
				color:white;
				}
		</style>
           <table width="1659" height="50" border="1">  
                <tr>  
                     <th align="center" width="04%">CPF</th>  
                     <th align="center" width="20%">Name</th> 
					 <th align="center" width="21%">Designation</th>   
					 <th align="center" width="05%">Training_Num</th> 
					 <th align="center" width="10%">Training_Date_From</th> 
					 <th align="center" width="10%">Training_Date_To</th> 
					 <th align="center" width="10%">Venue</th> 
					 <th align="center" width="10%">Status</th>
                       
                </tr> 
                
                <?php 
 if(mysql_num_rows($Recordset1) > 0)  
 {  
      while($row_Recordset1 = mysql_fetch_array($Recordset1))  
      {  
             
              ?>  <tr> 
                   
                     <td align="center"><?php echo $row_Recordset1["CPF"]?></td>  
                     <td align="center"><?php echo $row_Recordset1["Name"]?></td>  
					 <td align="center"><?php echo $row_Recordset1["Designation"]?></td>
					 <td align="center"><?php echo $row_Recordset1["Training_Num"]?></td> 
					 <td align="center"><?php echo $row_Recordset1["Training_Date_From"]?></td> 
					 <td align="center"><?php echo $row_Recordset1["Training_Date_To"]?></td> 
					 <td align="center"><?php echo $row_Recordset1["Venue"]?></td> 
					 <td align="center"><?php echo $row_Recordset1["Status"] ?></td> 
                     
                </tr>  
             <?php
      }  
     
 } ?> 
 </table>  

           
</body>
</html>
<?php
mysql_free_result($Recordset2);

mysql_free_result($Recordset1);
?>
