<?php 
include 'core.inc.php.';
echo "success! you are logedin as ";
echo $_SESSION['name'];
	echo $_SESSION['user_id'];
	echo '<a href="logout.php">Log Out</a>';
	
?>