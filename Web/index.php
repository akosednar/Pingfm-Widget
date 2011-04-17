<?php
$home = '1'; // Set initial setting of app variable
include 'includes/config.php';
?>
<html>
<head>
<title>Ping.fm Widget</title>
<meta name="viewport" content="width=320, initial-scale=0.7">
<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/<?php echo $style; ?>" />
<style type="text/css">
.msgbox{border:solid 1px #CC0000; padding:4px; background:#F3AAAE; margin-bottom:20px;}
</style>
  <script language="JavaScript">
 
  function blog(){

    var service   = document.getElementById('service');
    var blogtitle = document.getElementById('blogtitle');
    var title     = document.getElementById('title');
    var chars    = document.getElementById('charcount');

    if(service.value == 'blog'){
      blogtitle.style.display = 'block';
      title.value             = 'Blog title...';
      charcount.style.display     = 'none';
    }else{
      blogtitle.style.display = 'none';
      title.value             = '';
      charcount.style.display     = 'block';
    }

  }
  </script>
  <script language = "Javascript">
chars = 140;

var IE = (document.all) ? 1 : 0;
var DOM = 0;

if(parseInt(navigator.appVersion) >=5){
  DOM = 1
};

function show(txt){

  if(DOM){
	  var viewer = document.getElementById("charcount");
    viewer.innerHTML = txt;
  }else if(IE){
    document.all["charcount"].innerHTML = txt;
  }

}

function keyup(what){

  var str = new String(what.value);
  var len = str.length;

  if(len > chars){
    var showstr = '<span style="color: red; font-weight: bold;">' + len + '</span> /140';
  }else{
    var showstr = len + " /140";
  }

  show(showstr);

}

</script>
</head>
<body>
<br>
<div id="wrap">
<div id="content">
<img src="<?php echo $baseurl ?>images/ping.fm-logo.png" id="logo" />
<?php
if(isset($_SESSION['login'])){
?>
		<form name="theForm" form="" action="incoming_request.php" method="post">
        <input name="i" value="2" type="hidden">
            <strong>Post to: </strong>
            	<select name="service" id="service" onChange="blog();">
					<option value="status">Statuses</option>
        			<option value="microblog">Micro-blogs</option>
                    <option value="blog">Blogs</option>
        		</select><br /><br />
				<textarea class="message" name="message" cols="40" rows="4" id="message" wrap="VIRTUAL" onKeyUp="keyup(this);" ></textarea><br />
					<div id="charcount" class="postchars" style="display: block;">0 /140</div>
                    <div id="blogtitle" style="display: none;"><br>
             <input type="text" name="title" id="title" class="blogtitle" value="" onClick="this.value='';" />
            </div>
		<input id="postbtn" value=" Ping it! " class="submit bluesubmit" type="submit">
		</form>
        <center>
        <a href="<?php echo $baseurl ?>logout">Logout</a><br /><br />
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
<?php
}
else {
?>
<strong>Login:</strong><br><br><br>
<?php if(isset($_GET['error'])){?>
    <div class="msgbox">Error! Verify your data!</div>
<?php
}
?>
<?php if(isset($_GET['login'])){?>
    <div class="msgbox">Please login!</div>
<?php
}
?>
<form name="login" action="includes/login.php" method="post">
<center> 
</center> 
<center>
Email:<br>
<input name="email" type="text" size="14" /><br>
Password:<br>
<input name="psw" type="password" size="14" /><br>
<input type="submit" name="button" id="button" value="Login" /><br>
<br>
</form>
</center>
</div>
	<div id="nav"> 
<a href="#">Home</a>
<a href="#">Recent</a>
<a href="#">Settings</a>
<a href="#">More</a>
	</div>	
</div>
<?php
}
?>
<div id="copyright">&copy; 2009 Anthony Kosednar</div>
<!-- Put Character Counter JS in here to cache it for later use !-->
<script type="text/javascript" src="<?php echo $baseurl ?>js/charactercounter.js"></script>
</body>
</html>
