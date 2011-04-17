<?php
include 'includes/config.php';
if(isset($_SESSION['login'])){
?>
<html>
<head>
<title>Ping.fm Widget</title>
<meta name="viewport" content="width=320, initial-scale=0.7">
<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/<?php echo $style; ?>" />
<script language = "Javascript">
// Open link in user's default browser window.
  function openExternalURL(href) {
    var request = new air.URLRequest(href);
    try {
      air.navigateToURL(request);
    } catch (e) {
      // handle error here
	    air.Introspector.Console.log(e)
   }
}
</script>
<script language = "Javascript">
function link(url)  {
  if (widget && widget.openURL) {
    widget.openURL(url);
    }
   }
</script>
</head>
<body>
<br>
<div id="wrap">
<div id="content">
<img src="<?php echo $baseurl ?>includes/ping.fm-logo.png" id="logo" />
            <strong>Donate:</strong><br>
            <center><br><br>
             This applacation takes a good deal of time and effort.<br />
             If you have found it helpful in anyway, please consider donating by clicking the link below.<br />
			 Thank you!<br />
             <br />
             <span onClick="widget.openURL('<?php echo $baseurl ?>donate');">Donate!</span>
             <a href="<?php echo $baseurl ?>donate" onClick="openExternalURL(this.href); return false;">Donate!</a>
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
