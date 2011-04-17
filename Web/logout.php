<?php 
include('includes/config.php');
session_unset();
session_destroy();
	// Change the page where redirect an user
	// after logout.
?>
<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $baseurl ?>">
