<!-- This File Shows the details of an Employee -->
<?php include 'connect.php'; 


	$query = "SELECT * FROM `employee` WHERE ID=".$_GET['id'];
	$result = mysqli_query($db, $query);
?>
<?php include "html/bootstrap.html" ?>
<?php include "html/navbar.html"; ?>
<?php
date_default_timezone_set('Asia/Dhaka');
$date = date('m/d/Y', time());

?>
<?php
if(isset($_POST['join']))
	{
		$id=$_POST['id'];
		$day_before = date( 'Y-m-d', strtotime( $date . ' -1 day' ) );	
		$query1="UPDATE `leaves` SET `To Date`='$day_before' WHERE LeaveID='$id'";
		mysqli_query($db,$query1);
		$query1="SELECT * FROM leaves WHERE LeaveID='$id'";
		$result1 = mysqli_query($db, $query1);
		$row2= mysqli_fetch_array($result1);
		if(date_create($row2['From Date'])>date_create($row2['To Date']))
		{
		$a=0;
		$query1="UPDATE `leaves` SET days='$a', WHERE LeaveID='$id'";
		mysqli_query($db,$query1);
		}
		else
		{
		$diff = date_diff(date_create($row2['From Date']), date_create($row2['To Date']));
		$a = $diff->days;
		$a = (int) $a;
		$a++;
		$query1="UPDATE `leaves` SET days='$a' WHERE LeaveID='$id'";
		mysqli_query($db,$query1);
		}
	
	}
?>


<!DOCTYPE html>
<html>
<head>
<?php include "html/bootstrap.html" ?>
    <title>Details</title>
    <meta charset="utf-8">
</head>
<body> 
<div class="row row-offcanvas row-offcanvas-left">

<div class="container-fluid">
    
        <?php include "html/sidebar.html" ?>
		<br><h3>Employee Details</h3><br>  
<div class="row">
<div class="col-6 col-sm-6 col-lg-8">
<?php

   $jobdetails = mysqli_fetch_array($result);
   echo '<img src="data:image/jpeg;base64,'.base64_encode( $jobdetails['image'] ).'"/><br><br><br>';
   echo 'Employee ID: '.$jobdetails['ID'].'<br>'.'<br>';
   echo 'First Name: '.$jobdetails['First Name'].'<br>'.'<br>';
   echo 'Last Name: '.$jobdetails['Last Name'].'<br>'.'<br>';
   echo 'Salary: '.$jobdetails['Salary'].'<br>'.'<br>';
   echo 'Date of Birth: '.$jobdetails['Date of Birth'].'<br>'.'<br>';
   echo 'Gender: '.$jobdetails['Gender'].'<br>'.'<br>';
   echo 'Blood Group: '.$jobdetails['Blood Group'].'<br>'.'<br>';
   echo 'Present Address: '.$jobdetails['Postal Code']."-".$jobdetails['District'].", ".$jobdetails['Division'].'<br>'.'<br>';
   echo 'Designation: '.$jobdetails['Designation'].'<br>'.'<br>';
   echo 'Cell Phone: '.$jobdetails['Cell Phone'].'<br>'.'<br>';
   echo 'National ID: '.$jobdetails['NID'].'<br>'.'<br>';
   echo '<a href="personal_leave_info.php?id=1"'.$jobdetails['ID'].'>Leave Information</a>'.'<br>'.'<br>'; 
?>



<?php
date_default_timezone_set('Asia/Dhaka');
$date = date('m/d/Y', time());

?>
<?php

function check_in_range($start_date, $end_date, $date_from_user)
{
  // Convert to timestamp
  $start_ts = strtotime($start_date);
  $end_ts = strtotime($end_date);
  $user_ts = strtotime($date_from_user);

  // Check that user date is between start & end
  return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
}

 $sql = "SELECT * FROM leaves WHERE status='Approved' AND EmployeeID=".$_GET['id'];
 $res = mysqli_query($db,$sql);
 
	 $count=0;
 while($row=mysqli_fetch_array($res))
 {
	 
	$start_date = $row['From Date'];
	$end_date = $row['To Date'];
	$date_from_user = $date;

	if(check_in_range($start_date, $end_date, $date_from_user))
	{
		echo "<h5>Leave Status: On Leave</h5><br>";
		$count++;
		$leave_id= $row['LeaveID'];
		break;
	}
 }
 if ($count==0){echo "<h5>Leave Status: On Work</h5><br>";}
 if ($count>0)
 {
	 echo "<form method='post' action=''>
		<input type='hidden' name='id' value='".$leave_id."'>
		<button type='submit' name='join'>Join Now</button></form>";
 }
?>

<form action="update_employee.php" action="post">
 

 <button type="submit" name="submit" value="<?php echo $_GET['id']; ?>" class="btn btn-success"> Update</button>
 

</form>
<br>
<br>
	<?php include "html/footer.html"; ?>
</div>
   </div>
                <!--/span-->

                <!--/span-->
            
			</div>
			</div>
</body>
</html>