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
<strong>Vaildate Key:</strong><br>
<center> 
<form name="theForm" form="" action="incoming_request.php" method="post">
<input name="i" value="4" type="hidden">
-&nbsp; Your Ping.fm application key is: <br><?php echo $k; ?> <br><br>
Click on the button below to see if your key is valid<br><br>
<input id="postbtn" value=" Check " type="submit">
</form><br><br>
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
