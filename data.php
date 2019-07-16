<?php require_once('Connections/ongcdetails.php'); ?>
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

mysql_select_db($database_ongcdetails, $ongcdetails);
$query_Recordset1 = "SELECT Name, Designation FROM employees_applied";
$Recordset1 = mysql_query($query_Recordset1, $ongcdetails) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$name=$row_Recordset1['Name'];
$designation=$row_Recordset1['Designation'];
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
 
?>
<?php
$title = $_POST["titl"];

mysql_select_db($database_ongcdetails, $ongcdetails);
$query_values = "SELECT * FROM training where Training_Title='$title' ";
$values = mysql_query($query_values, $ongcdetails) or die(mysql_error());



$row_values = mysql_fetch_assoc($values);
$totalRows_values = mysql_num_rows($values);

//$query = "INSERT INTO applicants (Training_Title, Training_Number) VALUES ('$cpf','$st') ";
//$values = mysql_query($query, $ongcdetails) or die(mysql_error());
//echo $values;
//echo $tt;
//mysql_free_result($values);
?>
<html>
    <head>
		 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.11.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.gif" type="image/x-icon">
  <meta name="description" content="">
  <title>login</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
 <form method="post" action="final.php">
                              
															<label for="training"><font size="3" color="White"><style="font-family:'Courier New'">TRAINING NUMBER </label>
															
                              <input type="text" class="form-control" id="number" name="1" value="<?php echo $row_values['Training_Num']?>"  />

															<label for="training"><font size="3" color="White"><style="font-family:'Courier New'">TRAINING FROM </label>
                              <input type="text" class="form-control" id="start" name="2" value="<?php echo $row_values['Training_Date_From']?>" />

															<label for="training"><font size="3" color="White"><style="font-family:'Courier New'">TRAINING TO </label>
                              <input type="text" class="form-control" id="end" name="4" value="<?php echo $row_values['Training_Date_To']?>" />

															<label for="training"><font size="3" color="White"><style="font-family:'Courier New'">FACULTY NAME </label>
                              <input type="text" class="form-control" id="venue" name="3" value="<?php echo $row_values['Faculty']?>" />

															<label for="training"><font size="3" color="White"><style="font-family:'Courier New'">VENUE </label>
                              <input type="text" class="form-control" id="faculty" name="5" value="<?php echo $row_values['Venue']?>" />

                            
                            <input type="hidden" name="Training_Title_hidden"
                                                                                   value="<?php echo $_row_values['Training_Title']; ?>">
                                                                                                      
                        
                           
 </form>
                     



<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <!--[if lte IE 9]>
    <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
  <![endif]-->
<script src="assets/jarallax/jarallax.js"></script>
<script src="assets/mobirise/js/script.js"></script>
  
  
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
