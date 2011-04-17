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
switch ($a)
{
case adobe:
?>
<script type="text/javascript" src="<?php echo $baseurl ?>js/AIRAliases.js"></script>
<script type="text/javascript">
      function appLoad(){
      air.trace("Ping.fm Widget");
    } 
</script>
<?php
$your_developer_key == $aa_dev_key;
$set = "mobile";
break;
case iping:
$your_developer_key == $dw_dev_key;
$set = "mobile";
break;
case mobile: //cheating and using adobe for now shhh!
$your_developer_key == $aa_dev_key; 
$set = "mobile";
break;
default:
  echo "No App set";
}
//For Debugging Purposes Only:
//echo $_POST['s'];
//echo $_POST['message'];
//echo $_POST['service'];
//echo $_POST['title'];
			   
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
case 2:
// Blog Posting

$PHPingFM = new PHPingFM($your_developer_key,$k);
//$_POST['s']

if ($_POST['service'] =="blog") {
	$result = $PHPingFM->post("blog",$_POST['message'],$_POST['title']);
}
elseif ($_POST['service'] =="microblog") {
	$result = $PHPingFM->post("microblog",$_POST['message']);
}
else {
	$result = $PHPingFM->post("status",$_POST['message']);
}

if (!$result) {
  $output = '<div class="error">There was an error in posting.</div>';
  echo $output;
}
else {
  $output = '<div class="success">Post was posted successfully.</div>';
  echo $output;
}

break;
case 3:
// Will be display recent post 

// $latest_posts = $PHPingFM->latest();
//$output = '';
 // $output .= '<p>';
 // if (isset($post['title'])) {
//    $output .= '<strong>'. $post['title'] .'</strong><br />';      
//  }
//  $output .= $post['body'];
//  $output .= '<br /><small>Posted at '. date('g:iA', $post['date']['unix']) .' on '. date('F j, Y', $post['date']['unix']);
//  $output .= ' to '. implode(', ', $post['services']) .'</small>';
//  $output .= '</p>';
//echo "<br>";
echo "Currentaly bugs are being fixed here";
echo "<br>";

break;
case 4:
// Vailidate User Key

$PHPingFM = new PHPingFM($your_developer_key,$k);

$result = $PHPingFM->validate();

if (!$result) {
  $output = '<div class="error">User application key is invalid.</div>';
}
else {
  $output = '<div class="success">User application key is valid.</div>';
}
echo $output;
break;
case 5:
// Vailidate User Key

$PHPingFM = new PHPingFM($your_developer_key,$k);

$result = $PHPingFM->validate();

if (!$result) {
  $output = '<div class="error">User application key is invalid.</div>';
}
else {
  $output = '<div class="success">User application key is valid.</div>';
}
echo $output;
break;
default:
  echo "No operation was requested<br><br>";
}
?>
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
