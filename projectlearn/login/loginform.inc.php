<?php 
include 'core.inc.php.';
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
	echo $_SESSION['name'];
	echo $_SESSION['user_id'];
	echo 'You\'re logged in, .<br/>';
	header('Location: success.php');
}
else
{
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if(!empty($username) && !empty($password))
		{
			$query = "SELECT user_id FROM members WHERE name='$username' AND password='$password'";
			if($query_run = mysqli_query($mysql_connect, $query))
			{
				$query_run = mysqli_query($mysql_connect, $query);
				
				$query_num_rows = mysqli_num_rows($query_run);
				if($query_num_rows==0)
				{
					echo 'Invalid username/password.';
				}
				else if($query_num_rows==1)
				{
					$query_row = mysqli_fetch_array($query_run);
					$user_id = $query_row['user_id'];
					$name = $query_row['name'];
					$_SESSION['user_id'] = $user_id;
					$_SESSION['name'] = $name;
					header('Location: success.php');
				}
			}
		}
		else
		{
			echo 'You must enter a username and password.';
		}
	}
}
?>

<form action="loginform.inc.php" method="POST">
	Username: <input type="text" name="username" maxlength="20"><br/>
	Password: <input type="password" name="password" maxlength="20"><br/>
	<input type="submit" value="Log In">
</form>