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
									<center><i class="fa fa-square-o"></i>&nbsp;Search  Dependent Info</center>
                                </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
                    <div id="left">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href="#">
                                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
                                    <!--<span class="label label-danger user-label">16</span>-->
                                </a>
                        
                                <div class="media-body">
                                    <h5 class="media-heading">Admin</h5>
                                    <ul class="list-unstyled user-info">
                                        <li><a href="#">Administrator</a></li>
                                        <li>Last Access : <br>
                                            <small><i class="fa fa-calendar"></i></small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
						<!-- #menu -->
                       <?php include 'menu.php'?>
                        <!-- /#menu -->
                    </div>
                    <!-- /#left -->
                
				<div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
<div class="container-fluid">
<?php
	include 'mysqli_connect.php';
if(isset($_POST['submit'])){
        $value = trim($_POST['$stu_value']);
        $col=$_POST['$column'];
		
		echo 'submit success';
	$query = "SELECT * FROM dependents where $col  LIKE '%$value%' ";
// Get a response from the database by sending the connection
// and the query
	$response = mysqli_query($dbc, $query);
// If the query executed properly proceed
	$rownum = mysqli_num_rows($response);
	if($rownum!=0){
		echo '<div class="box">
            <header>
                <h5>Search Result Table</h5>
                <div class="toolbar">
                    <div class="btn-group">
                        <a class="btn btn-danger btn-sm close-box"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </header>
            <div id="sortableTable" class="body collapse in">
		<div class="table-responsive">
				<table class="table table-hover table-bordered ">
				<thead>
				  <tr class="active" >
					<td align="center"><b>Teacher ID</b></td>
					<td align="center"><b>First Name</b></td>
					<td align="center"><b>Last Name</b></td>
					<td align="center"><b>Sex</b></td>
					<td align="center"><b>Brother</b></td>
				  </tr>
				</thead>';
		// mysqli_fetch_array will return a row of data from the query
		// until no further data is available
		while($row = mysqli_fetch_array($response)){
			if($row==0){echo " NO data found";}
			echo '<tbody>
					<tr class="">
					  <td align="center">' . $row['t_id'] . '</td>
					  <td align="center">' . $row['f_name'] . '</td>
					  <td align="center">' . $row['l_name'] . '</td>
					  <td align="center">' . $row['sex'] . '</td>
					  <td align="center">' . $row['relation'] . '</td>
					</tr>
				</tbody>';
		}
			echo '</table></div></div>';
	} 
	else
	{
		echo "<div class=\"col-lg-10 panel panel-danger \">
						<div class=\"panel-heading\">Search Unsuccessful
						</div>
						<div class=\"panel-body\">
						!!!   Data not found in database   !!!!
						</div>
					</div>
			  ";
	} 
// Close connection to the database
	mysqli_close($dbc);
}
else{
		echo "<div class=\"col-lg-10 panel panel-danger \">
						<div class=\"panel-heading\">Search Unsuccessful
						</div>
						<div class=\"panel-body\">
						There some kind of Posting Error!!
						</div>
					</div>
			  ";
	}

?>

</div>
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
					
					<!--right-->
                   <?php include 'rightside.php'?>
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