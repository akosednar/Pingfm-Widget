<?php
session_start();
ob_start("ob_gzhandler"); // New compressed handeling for sending to browser

// Home Page Sub Text
$home_txt = '';

// Ping.fm Information

$wb_dev_key = ""; // Web Developer Key
$aa_dev_key = ""; // Adobe Air Developer Key
$dw_dev_key = ""; // Dashboard Widget Developer Key

// Database Connection Junk
$db_host =" ";
$db_name =" ";
$db_user =" ";
$db_pass =" ";

$email_contact = ""; // Contact Email
$email_from = "";    // From Email for Most Emails

//-------------------------------------------------------
// For table setup please see in includes table_setup.txt
//-------------------------------------------------------

// Add slashes to submitted text for ping.fm posting
if(isset($_POST['myText'])){
	    $info = addslashes($_POST['message']);
}

// Define Some Functions
function redirect($url, $seconds = FALSE) {
    if (!headers_sent() && $seconds == FALSE) { 
	header("Location:".$url);
    } else {
        if ($seconds == FALSE) { 
			$seconds = "0";
        }
		echo "<meta http-equiv=\"refresh\" content=\"$seconds;url=$url\">";
    }
}

// New sessions support for applacation
if(isset($home)){
$_SESSION['app'] = "mobile"; 
}

// The following function clean a string to prevent query injection

function cleanInput($input){
return trim(ereg_replace("<[^>]*>%#;","",$input));
}

// Clean Url Variables and set them as shorter script values
if(isset($_REQUEST['ka'])){
	 $a = cleanInput($_REQUEST['a']); // Applacation
	 $d = cleanInput($_REQUEST['d']); // Page ID #
	 $t = cleanInput($_REQUEST['t']); // Template Id
     $k = cleanInput($_REQUEST['k']); // Applacation Key
     $e = cleanInput($_REQUEST['e']); // Email
	// $u = cleanInput($_REQUEST['u']); // User Type 0=normal 1=admin {Please note this is not added yet}
}

// Clean Url Variables and set them as shorter script values  {Post Values}
if(isset($_POST['ka'])){
	 $a = cleanInput($_POST['a']); // Applacation
	 $d = cleanInput($_POST['d']); // Page ID #
	 $t = cleanInput($_POST['t']); // Template Id
     $k = cleanInput($_POST['k']); // Applacation Key
     $e = cleanInput($_POST['e']); // Email
	// $u = cleanInput($_REQUEST['u']); // User Type 0=normal 1=admin {Please note this is not added yet}
}

// Set Sessions Data as script variables
if(isset($_SESSION['login'])){
	 $a = cleanInput($_SESSION['app']); // Applacation
     $d = cleanInput($_SESSION['id']); // Page ID #  
     $t = cleanInput($_SESSION['template']);// Template Id
     $k = cleanInput($_SESSION['key']); // Applacation Key
     $e = cleanInput($_SESSION['email']); // Email
	 // $u = cleanInput($_REQUEST['u']); // User Type 0=normal 1=admin {Please note this is not added yet}

}


 // Set Some Url Junk  
 $baseurl_entriesite = 'http://pingwidget.com';
 $baseurl = 'http://pingwidget.com/'; //note has to end in a slash
 $baseend = "?a=".$a."&d=".$d."&t=".$t."&k=".$k."&e=".$e; // a=applacation, p=page, t=template, k=key, e=email/username 

// Set Style Property
switch ($t)
{
case 1:
$style = 'style.css';
  break;
case 2:
$style = 'dark_theme.css';
  break;
case 3:
$style = 'red_theme.css';
  break;
default:
$style = 'style.css';
}

if ($k == "")
  {
	$admin = '<a href="'.$baseurl.'admin/adminhome">Admin Home</a><br>';
  }
else {
$admin = '';
}

// Forgot Password Email

function forgotpassword($forgotpasswordcode,$useremail){
$from2 = "From: ".$email_from."";
$subject2 = "Fogot Password - Ping.fm Desktop Widget";
$bodybetaaproved = "Hello,\n\n"
             ."I request to reset your password for your account, ".$useremail." on the ping.fm widget's network ahs been made.\n"
             ."To reset your password please vist the following url in your browser:\n"
             . $baseurl."forgotpassword.php?i=".$forgotpasswordcode
             ."\n\n"
             ."If you have any problems, questions, comments, etc., just reply to this message.\n"
             ."\n\n"
             ."- Support\n"
			 .$baseurl;
    return mail($useremail,$subject2,$bodybetaaproved,$from2);
   }
function generatePassword ($length = 8)
{
  // start with a blank password
  $password = "";

  // define possible characters
  $possible = "0123456789bcdfghjkmnpqrstvwxyz"; 
  
  // set up a counter
  $i = 0; 
    
  // add random characters to $password until $length is reached
  while ($i < $length) { 

    // pick a random character from the possible ones
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
        
    // we don't want this character if it's already in the password
    if (!strstr($password, $char)) { 
      $password .= $char;
      $i++;
    }

  }

  // done!
  return $password;

}
?>
