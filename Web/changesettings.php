<?php
include 'includes/config.php';
if(isset($_SESSION['login'])){
$con = mysql_connect($db_host,$db_user,$db_pass;
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_name, $con);

// Set incoming Post Variables
// Email = $e
$new = cleanInput($_REQUEST['newentry']); // New Entry
$salt = md5($new);
$new_md5 = md5($salt.$new);

$sql3 = "UPDATE user SET PASSWORD = '".$new_md5."' WHERE EMAIL = '".$e."' ";
?>
<html>
<head>
    <title>Ping.fm Widget</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/<?php echo $style; ?>" />
</head>
<body>
<br>
<div id="wrap">
<div id="content">
<img src="<?php echo $baseurl ?>images/ping.fm-logo.png" id="logo" />
<strong>Settings Change</strong><br><br>
<center>
<?php
switch ($_POST['type'])
{
case 1:
//Theme Changing
$sql = "UPDATE user SET TEMPLATE = '".$new."' WHERE EMAIL = '".$e."' ";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Your settings were changed successfuly";
break;
case 2:
//Key Changing
$sql2 = "UPDATE user SET APPKEY = '".$_REQUEST['key']."' WHERE EMAIL = '".$e."' ";
if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }
  
echo "Your settings were changed successfuly";
break;
case 3:
//Password Chaning
//$sql3 = "UPDATE user SET PASSWORD = '".$new."' WHERE EMAIL = '".$e"' ";
if (!mysql_query($sql3,$con))
  {
  die('Error: ' . mysql_error());
  }
  
echo "Your settings were changed successfuly";
break;
case 4:
//Email Chaning
$sql4 = "UPDATE user SET EMAIL = '".$new."' WHERE EMAIL = '".$e."' ";
if (!mysql_query($sql4,$con))
  {
  die('Error: ' . mysql_error());
  }
  
echo "Your settings were changed successfuly";
break;
case 5:
//Pixel Pipe Key Changing
$sql5 = "UPDATE user SET Something = '".$new."' WHERE EMAIL = '".$e."' ";
if (!mysql_query($sql5,$con))
  {
  die('Error: ' . mysql_error());
  }
  
echo "Your settings were changed successfuly";
break;
default:
  echo "No operation was requested";
}
?>
<br>
Please logout for them to take affect<br>
<br><br>
</center>
</div>
</div>
	<div id="nav"> 
<a href="<?php echo $baseurl ?>">Home</a>
<a href="<?php echo $baseurl ?>recent">Recent</a>
<a href="<?php echo $baseurl ?>settings">Settings</a>
<a href="<?php echo $baseurl ?>more">More</a>
<?php
echo $admin;
?>
</div>
	<div id="copyright">&copy; 2009 Anthony Kosednar</div>
<script type="text/javascript" src="<?php echo $baseurl ?>js/charactercounter.js"></script>
</body>
</html>
<?php
mysql_close($con);
?>
<?php
}
else {
?>
<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $baseurl ?>?login=1">
<?php
} 
?>
