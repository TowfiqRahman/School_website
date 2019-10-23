<?php include 'connect.php';


	$query = "DELETE FROM `employee` WHERE ID=".$_GET['id'];
	
	
	
	if (mysqli_query($db, $query)) {
    echo "Record deleted successfully";
	
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
echo "<br><br><a href='index.php'>Return to Hompage</a><br>";





mysqli_close($db);
?>