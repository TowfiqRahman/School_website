<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname="school";
$dbc = mysqli_connect($servername,$username,$password,$dbname);
	if(!$dbc){ 
		die('Could not connect to MySQL: ' .mysqli_connect_error());
	}else{
		//echo "In DATABASE<hr></hr>";
	}
?>
