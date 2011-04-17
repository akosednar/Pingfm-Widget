<?php
include 'includes/config.php';
include_once 'includes/PHPingFM.php';
if(isset($_SESSION['login'])){
?>
<html>
<head>
    <title>Ping.fm Widget</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/<?php echo $style; ?>" />
    <meta name="viewport" content="width=320, initial-scale=0.7">
<?php
$your_developer_key == $aa_dev_key;
$set = "adobe";
break;
case iping:
$your_developer_key == $dw_dev_key;
$set = "iping";
break;
case mobile: //cheating and using adobe for now shhh!
$your_developer_key == $aa_dev_key;
$set = "adobe";
break;
default:
  echo "No App set";
}
//For Debugging Purposes Only:
//echo $set;
?>
</head>
<body onLoad="appLoad()">
<br>
<div id="wrap">
	<div id="content">
		<img src="<?php echo $baseurl ?>images/ping.fm-logo.png" id="logo" />
<strong>Results:</strong>
<center>
Your request was submitted and here are the results:<br>
<br>
<br><br>
<?php

switch ($_POST['i'])
{
case 11:
// Invite Friend
$subject = "Check It Out!";
$messages = "Your friend would like to invite you to try the Ping.fm Widget. \n\n"
			."Check it out at http://pingwidget.com/ \n";
// From is $e or the email from the session variable
$headers = "From: $e";
mail($_REQUEST['email-invite'],$subject,$messages,$headers);
echo "Mail Sent.";
break;
case 12:
$id= $_SESSION['userid'];
$con = mysql_connect($db_host,$db_user,$db_pass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($db_name, $con);
mysql_query("DELETE FROM user WHERE email='".$e."'");
mysql_close($con);
session_unset();
session_destroy();
echo "Your acocunt has been deleted and you have been logged out";
break;
case 13:
// Download Recent Posts

break;
case 14:
// Feedback
$subject = "Feedback - ".$_REQUEST['type'];
$message = $_REQUEST['message'];
$to == $email_contact;
// From is $e or the email from the session variable
$headers = "From: $e";
mail($to,$subject,$_REQUEST['message'],$headers);
echo "Feedback Sent.";
break;
case 15:
// I forget what 15 is for lol

break;
default:
  echo "No operation was requested";
}
?>
<br />
<br>
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
}
else {
?>
<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $baseurl ?>?login=1">
<?php
} 
?>
