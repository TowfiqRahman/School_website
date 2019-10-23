<?php 
//require 'core.inc.php';
require 'connect.inc.php';

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
	echo $_SESSION['name'];
	echo $_SESSION['user_id'];
	echo 'You\'re logged in, .<br/>';
	echo '<a href="logout.php">Log Out</a>';
}
else
{
	include 'loginform.inc.php';
}	
?>