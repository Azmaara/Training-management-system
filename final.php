<?php require_once('Connections/ongcdetails.php'); ?>
<?php

/*if($_POST['1'])
{
echo " You have pressed 1";
}
else if($_POST['2'])
{*/
	$title = $_POST["select"];
mysql_select_db($database_ongcdetails, $ongcdetails);
$query_values = "SELECT * FROM training where Training_Title='$title' ";
$values = mysql_query($query_values, $ongcdetails) or die(mysql_error());
$row_values = mysql_fetch_assoc($values);
$totalRows_values = mysql_num_rows($values);

    $tt=$row_values['Training_Num'];
	$s_date=$row_values['Training_Date_From'];
	$e_date=$row_values['Training_Date_To'];
    $st=$row_values['Training_Title'];
    $venue=$row_values['Venue'];
	session_start();
    $cpf="";
    $cpf= $_SESSION['MM_Username'];
	//mysql_select_db($database_ongcdetails, $ongcdetails);
	$query_value = "SELECT * FROM employees_applied where CPF='$cpf' ";
    $value = mysql_query($query_value, $ongcdetails) or die(mysql_error());
    $row_value = mysql_fetch_assoc($value);
    $desig=$row_value['Designation'];
    $name=$row_value['Name'];

    $query = "INSERT INTO tbl_sample (CPF,Name,Training_Num,Designation,Training_Date_From,Training_Date_To,Venue) VALUES ('$cpf','$name','$tt','$desig','$s_date','$e_date','$venue') ";

$values = mysql_query($query, $ongcdetails) or die(mysql_error());
//}
?>

<!DOCTYPE html>
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
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-4">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="home.php"><img src="assets/images/logo.gif" class="mbr-navbar__brand-img mbr-brand__img" alt="Mobirise" title="ongc training"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="home.php">ONGC TRAINING PROGRAM</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="home.php">HOME</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="about.php">ABOUT</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="contact.php">CONTACT</a></li> 
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="login1.php">ADMIN</a></li>
                            </ul>                            
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a rel="external" href="home.php"></a></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background mbr-after-navbar" id="form1-18" style="background-image: url(assets/images/ongc-oil-platform-2800x1791-19.jpg);">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(34, 34, 34);"></div>
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text"><em>Successfully Registered</em></h2>
                        </div>
                        
                      

                         
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-7" style="background-color: rgb(0, 0, 0);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 15px; padding-bottom: 15px;">
            <div class="col-sm-4">
                <div><a href="home.php"><img src="assets/images/logo.gif" class="mbr-contacts__img mbr-contacts__img--left"></a></div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
1234 Street Name<br>Dehradun,248001&nbsp;</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>CONTACTS</strong><br>
Email: support@ongcindia.com<br>
Phone: +91 9411178219<br>
Fax: +1 (0) 000 0000 002</p>
                    </div>
                    <div class="col-sm-4"><p class="mbr-contacts__text"><strong>LINKS</strong></p><ul class="mbr-contacts__list"><li><a href="http://www.ongcindia.com/wps/wcm/connect/ongcindia/home/" target="_blank">Main Website</a></li><li><br></li><li><br></li><li></li></ul></div>
                </div>
            </div>
        </div>
    </div>
</section>


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