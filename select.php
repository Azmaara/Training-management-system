<?php require_once('Connections/trial.php'); ?>
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

mysql_select_db($database_trial, $trial);
$query_Recordset1 = "SELECT * FROM tbl_sample";
$Recordset1 = mysql_query($query_Recordset1, $trial) or die(mysql_error());
//$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

  
 //$connect = mysql_connect("localhost", "root", "", "trial");  
 //$output = '';  
 //$sql = "SELECT * FROM tbl_sample ORDER BY id DESC";  
 //$result = mysql_query($sql,$connect);  or die(mysql_error());
 ?>
       
                       <form action="search.php" method="POST">
                            
					
							  <label for="training"><font size="3" color="Black"><style="font-family:'Courier New'">SELECT DATE</label>
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
							  </div>
                             
						
                         <br /> 
						 <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger" style="float:right">SEARCH</button></div>
</form>
                     <br />  
                     <br />  
                     <br />
                     <br />  
                     <br />
                     <?php
 
 $output = '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="05%">CPF</th>  
                     <th width="20%">Name</th> 
					 <th width="20%">Designation</th>   
					 <th width="05%">Training_Num</th> 
					 <th width="10%">Training_Date_From</th> 
					 <th width="10%">Training_Date_To</th> 
					 <th width="10%">Venue</th> 
					 <th width="10%">Status</th>
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysql_num_rows($Recordset1) > 0)  
 {  
      while($row_Recordset1 = mysql_fetch_array($Recordset1))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row_Recordset1["CPF"].'</td>  
                     <td class="first_name" data-id1="'.$row_Recordset1["CPF"].'" contenteditable>'.$row_Recordset1["Name"].'</td>  
					  
					 <td class="Designation" data-id4="'.$row_Recordset1["CPF"].'" contenteditable>'.$row_Recordset1["Designation"].'</td>
					 <td class="Training_Num" data-id4="'.$row_Recordset1["CPF"].'" contenteditable>'.$row_Recordset1["Training_Num"].'</td> 
					 <td class="Training_Date_From" data-id4="'.$row_Recordset1["CPF"].'" contenteditable>'.$row_Recordset1["Training_Date_From"].'</td> 
					 <td class="Training_Date_To" data-id4="'.$row_Recordset1["CPF"].'" contenteditable>'.$row_Recordset1["Training_Date_To"].'</td> 
					 <td class="Venue" data-id4="'.$row_Recordset1["CPF"].'" contenteditable>'.$row_Recordset1["Venue"].'</td> 
					 <td class="Status" data-id2="'.$row_Recordset1["CPF"].'" contenteditable >'.$row_Recordset1["Status"].'</td> 
                     <td><button type="button" name="delete_btn" data-id3="'.$row_Recordset1["CPF"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="first_name" contenteditable></td>  
                <td id="Designation" contenteditable></td> 
				<td id="Designation" contenteditable></td> 
				<td id="Training_Num" contenteditable></td> 
				<td id="Training_Date_From" contenteditable></td> 
				<td id="Training_Date_To" contenteditable></td> 
				<td id="Venue" contenteditable></td> 
				<td id="Status" contenteditable></td> 
				
				 
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
