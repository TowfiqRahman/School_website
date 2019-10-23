<!doctype html>
<html>

<head>
    <?php  include 'header.php'?>

  </head>

        <body  class="" style=" background-color:#3A3A3A">
            <div class="bg-dark dk" id="wrap" style="padding-bottom:50px;">
                <div id="top">
                    
					<!-- .navbar -->
                    <?php include 'navbar.php' ?>
                    <!-- /.navbar -->
                    
					<header class="head">
                                
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
									<center><i class="fa fa-square-o"></i>&nbsp;Update  Student Info </center>
                                </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                
                        
						<!-- #menu -->
                       <?php //include 'menu.php'?>
                        <!-- /#menu -->
                    </div>
                    <!-- /#left -->
                
				<div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
<div class="container">
<?php
	include 'mysqli_connect.php';
if(isset($_POST['submit'])){
        $id = trim($_POST['id']);
        $value = trim($_POST['$stu_value']);
        $col=trim($_POST['$column']);
        $query = "UPDATE  student SET $col = '$value' where id=$id";

        if(mysqli_query($dbc, $query)){
			echo "<center><h3><p class=\"text-success\">Data Updated</p><h3></center>";
			$query1 = "SELECT * FROM student where id=$id";
// Get a response from the database by sending the connection
// and the query
$response = mysqli_query($dbc, $query1);
// If the query executed properly proceed
	if($response){
		echo '<div class="box">
            <header>
                <center><h4><p class="text-primary">Search Result Table</p></h4><center>
            </header>
            <div id="sortableTable" class="body collapse in">
		<div class="table-responsive">
				<table class="table table-hover table-bordered ">
				<thead>
				  <tr class="active" >
					<td align="center"><b>ID</b></td>
					<td align="center"><b>First Name</b></td>
					<td align="center"><b>Last Name</b></td>
					<td align="center"><b>SEX</b></td>
					<td align="center"><b>Father Name</b></td>
					<td align="center"><b>Mother Name</b></td>
					<td align="center"><b>Birth Date</b></td>
					<td align="center"><b>Edu. Year</b></td>
					<td align="center"><b>Address</b></td>
					<td align="center"><b>Class</b></td>
					<td align="center"><b>Contact</b></td>
				  </tr>
				</thead>';
		// mysqli_fetch_array will return a row of data from the query
		// until no further data is available
		while($row = mysqli_fetch_array($response)){
			
			?><tbody>
					<tr class="">
					  <td align="center"> <?php echo $row['id'] ?> </td>
					  <td align="left"><?php echo $row['f_name'] ?></td>
					  <td align="left"><?php  echo $row['l_name'] ?></td>
					  <td align="center"><?php  echo $row['sex'] ?></td>
					  <td align="left"><?php  echo  $row['father_name'] ?></td>
					  <td align="left"><?php  echo  $row['mother_name'] ?></td>
					  <td align="center"><?php  echo $row['b_date'] ?></td>
					  <td align="center"><?php echo $row['edu_year'] ?></td>
					  <td align="center"><?php echo $row['address'] ?></td>
					  <td align="center"><?php echo $row['s_classno'] ?></td>
					  <td align="center"><?php echo $row['contact_no'] ?></td>
					</tr>
				</tbody>
			<?php
		}
			echo '</table></div></div>';
	}
		}
		
    else {
        
        die('Query Error!!'.mysqli_error($dbc));
    }
	mysqli_close($dbc);
}
	else{
		echo "<div class=\"col-lg-10 panel panel-danger \">
						<div class=\"panel-heading\">Data Update Unsuccessful
						</div>
						<div class=\"panel-body\">
						There some kind of Posting Error!!
						</div>
					</div>
			  ";
	}

?></div>
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
					
					<!--right-->
                   
                    <!-- /#right -->			
            </div>
            <!-- /#wrap -->
            
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content success">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Help?</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                This is Admin Panel. You can access database from here and can manipulate data. Use the top nav-bar and side bar for 
								your works. Cheers!.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog-->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
			
			<footer class="Footer bg-dark dker" style="">				
					<center><p>2017 &copy; School Admin Panel</p></center>
			</footer>
            <!-- /#footer -->
			
            <!--jQuery -->
			
            <script src="assets/lib/jquery/jquery.js"></script>
            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>
            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>
            <script src="assets/js/style-switcher.js"></script>
			
</body>
</html>