<?php
include 'includes/config.php';
if(isset($_SESSION['login'])){
?>
<html>
<head>
<title>Ping.fm Widget</title>
<meta name="viewport" content="width=320, initial-scale=0.7">
<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/<?php echo $style; ?>" />
</head>
<body>
<br>
<div id="wrap">
<div id="content">
<img src="<?php echo $baseurl ?>images/ping.fm-logo.png" id="logo" />
<strong>More:</strong><br>
<center>
<br><br>
<a href="<?php echo $baseurl ?>feedback">Feedback</a><br />
<a href="<?php echo $baseurl ?>invite">Invite A Friend</a><br/>
<a href="<?php echo $baseurl ?>validatekey">Validate Key</a><br />
<a href="<?php echo $baseurl ?>delete">Delete Account</a><br />
<?php
/*
<a href="<?php echo $baseurl ?>download">Download Recent Posts</a>
<a href="<?php echo $baseurl ?>donate">Donate</a>
*/
?>

<br>
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
