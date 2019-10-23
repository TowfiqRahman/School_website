<html>
<head>
</head>
<?php
	require_once('mysqli_connect.php');
	
	$search=$_POST["search"];
	 if(empty($_POST["search"])){
		 
        echo 'You need to enter the data<br />';
        mysqli_close($dbc);
		echo '<p><a href="http://localhost/projectlearn/website/search.php"><b>Search New Data </b></a></p>';
		
	 }
	else{
	$query = "SELECT first_name, last_name, email, street, city, state, zip,
		phone, birth_date FROM students 
		WHERE 
        first_name LIKE '%$search%'
        OR last_name LIKE '%$search%'
        OR email LIKE '%$search%'";
// Get a response from the database by sending the connection
// and the query
	$response = @mysqli_query($dbc, $query);
// If the query executed properly proceed
	if($response){
		$row1 = mysqli_fetch_array($response);
		if($row1 ){
		echo '<table align="left" cellspacing="5" cellpadding="8">
				<tr><td align="left"><b>First Name</b></td>
					<td align="left"><b>Last Name</b></td>
					<td align="left"><b>Email</b></td>
					<td align="left"><b>Street</b></td>
					<td align="left"><b>City</b></td>
					<td align="left"><b>State</b></td>
					<td align="left"><b>Zip</b></td>
					<td align="left"><b>Phone</b></td>
					<td align="left"><b>Birth Day</b></td>
				</tr>';
// mysqli_fetch_array will return a row of data from the query
// until no further data is available
		while($row = mysqli_fetch_array($response)){
			echo '<tr><td align="left">' . $row['first_name'] . 
					  '</td><td align="left">' .$row['last_name'] . 
					  '</td><td align="left">' .$row['email'] . 
					  '</td><td align="left">' .$row['street'] . 
					  '</td><td align="left">' .$row['city'] . 
					  '</td><td align="left">' .$row['state'] . 
					  '</td><td align="left">' .$row['zip'] . 
					  '</td><td align="left">' .$row['phone'] . 
					  '</td><td align="left">' .$row['birth_date'] .
					  '</td><td align="left">';
			echo '</tr>';
		}
			echo '</table>';
	}else{
		echo "    !!!   Data not found in database   !!!!  ";
	} 
	}
	else {
		echo "Couldn't issue database query<br />";
		echo mysqli_error($dbc);
	}
// Close connection to the database
	mysqli_close($dbc);
	echo '<p><a href="http://localhost/projectlearn/website/search.php"><b>Search New Data </b></a></p>';
	}
?>
<body>

</body>
</html>