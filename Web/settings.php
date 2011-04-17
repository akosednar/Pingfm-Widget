<?php
include 'includes/config.php';
if(isset($_SESSION['login'])){
?>
<html>
<head>
<title>Ping.fm Widget</title>
<meta name="viewport" content="width=320, initial-scale=0.7">
<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/<?php echo $style; ?>" />
<style type="text/css">
textarea.message:focus,textarea.message:active  { }
.bluesubmit {
  float: center;
}
</style>
</head>
<body>
<br>
<div id="wrap">
<div id="content">
<img src="<?php echo $baseurl ?>images/ping.fm-logo.png" id="logo" />
<strong>Settings:</strong><br>
<center> 
<br>
<?php
switch ($_POST['type'])
{
case 1:
//Theme Change
?>
Please change your theme now<br>
<form action="changesettings.php" method="post">
				<input name="type" value="1" type="hidden">
                <input name="type" value="<?php echo $_POST['type']; ?>" type="hidden"> 
New Theme:<br>
<input type="radio" name="newentry" value="1" /> Blue
<br />
<input type="radio" name="newentry" value="2" /> Black
<br>
<input type="radio" name="newentry" value="3" /> Red
<br>
			<input id="postbtn" value=" Submit " type="submit"><br>
</form>
<?php
break;
case 2:
//Key Change
?>
Please change your key now<br>
<form action="changesettings.php" method="post">
				<input name="type" value="2" type="hidden">
                <input name="type" value="<?php echo $_POST['type']; ?>" type="hidden">  
New Key:
<input type="text" name="key" /><br>
			<input id="postbtn" value=" Submit "  type="submit"><br>
</form>
<?php
break;
case 3:
//Password
?>
Please change your password now<br>
<form action="changesettings.php" method="post">
				<input name="type" value="3" type="hidden">
                <input name="type" value="<?php echo $_POST['type']; ?>" type="hidden">  
New Password:
<input type="text" name="newentry" /><br>
			<input id="postbtn" value=" Submit "  type="submit"><br>
</form>
<?php
break;
case 4:
// Email Change
?>
Please change your email now<br>
<form action="changesettings.php" method="post">
				<input name="type" value="4" type="hidden">
                <input name="type" value="<?php echo $_POST['type']; ?>" type="hidden"> 
New Email:
<input type="text" name="newentry" /><br>
			<input id="postbtn" value=" Submit " type="submit"><br>
</form>
<?php
break;
default:
?>
Please choose which setting to change<br>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<select name="type">
<?php // <option value="1">Theme</option>
 ?>
<option value="2">Key</option>
<option value="3">Password</option>
<option value="4">Email</option>
</select><br>
			<input id="postbtn" value=" Submit "  type="submit"><br>
</form>
<?php
}
?>
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
}
else {
?>
<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $baseurl ?>?login=1">
<?php
} 
?>
