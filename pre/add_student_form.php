<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Student Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

	<form class="form-horizontal" action="add_student_process.php" method="post">
		<div class="form-group">
		  <label class="control-label col-sm-2" for="id">ID:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="id" placeholder="Enter ID" name="id" required>
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="control-label col-sm-2" for="f_name">First Name:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="f_name" placeholder="Enter First Name" name="f_name" required>
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="control-label col-sm-2" for="l_name">Last Name:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" name="l_name" required>
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="control-label col-sm-2" for="sex">Sex:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="sex" placeholder="Sex" name="sex" required>
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="control-label col-sm-2" for="father_name">Father Name:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="father_name" placeholder="Enter Father Name" name="father_name" required>
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="control-label col-sm-2" for="mother_name">Mother Name:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="mother_name" placeholder="Enter Mother Name" name="mother_name" required>
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="control-label col-sm-2" for="d_date">Birth Date:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="b_date" placeholder="dd/mm/yyyy" name="b_date" required>
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="control-label col-sm-2" for="edu_year">Education Year:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="edu_year" placeholder="Education Year" name="edu_year" required>
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="control-label col-sm-2" for="address">Address:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="control-label col-sm-2" for="s_classno">Class:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="s_classno" placeholder="Enter Present Class" name="s_classno" required>
		  </div>
		</div>
		
		<div class="form-group">
		  <label class="control-label col-sm-2" for="contact_no">Contact No:</label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact No" name="contact_no" required>
		  </div>
		</div>
		
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-primary" name="submit" value="Send" />
		  </div>
		</div>	
  </form>
</div>
</body>
</html>
