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
									<center><i class="fa fa-square-o"></i>&nbsp;Show Result Info </center>
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
        
        $class=trim($_POST['class']);
        $query = "select s.id as id,s.f_name as fname , s.l_name as lname, s.edu_year as year,s.s_classno as classno,r.total_number as num from student s,result r 
		where s.id=r.s_id && s.s_classno = '$class' 
		order by r.total_number desc";

        if(mysqli_query($dbc, $query)){
			echo "data found";
		}
		else {
        
			die('Query Error!!'.mysqli_error($dbc));
		}
		$response = mysqli_query($dbc, $query);
// If the query executed properly proceed
	if($response){
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
					<td align="center"><b>First Name</b></td>
					<td align="center"><b>Last Name</b></td>
					<td align="center"><b>Education Year</b></td>
					<td align="center"><b>Class</b></td>
					<td align="center"><b>Total Num</b></td>
					<td align="center"><b>Position</b></td>
					<td align="center"><b>Delete</b></td>
					<td align="center"><b>Edit</b></td>
				  </tr>
				</thead>';
		// mysqli_fetch_array will return a row of data from the query
		// until no further data is available
		 $pos = 1;
		while($row = mysqli_fetch_array($response)){
			
			echo '<tbody>
					<tr class="">
					  <td align="center">' . $row['fname'] . '</td>
					  <td align="center">' . $row['lname'] . '</td>
					  <td align="center">' . $row['year'] . '</td>
					  <td align="center">' . $row['classno'] . '</td>
					  <td align="center">' . $row['num'] . '</td>
					  <td align="center">' . $pos. '</td>';
					  ?>
					  
					  <td><a href="delete_result.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
					  <td><a href="update_result_form1.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-info">Update</button></a></td>
					</tr>
				</tbody>
				<?php
				$pos++;
		}
			echo '</table></div></div>';
	} 
	else {
		echo "Couldn't issue database query<br />";
		echo mysqli_error($dbc);
	}
		
	mysqli_close($dbc);
}
	else{
		?><div class="col-lg-10 panel panel-danger ">
						<div class="panel-heading">Search Unsuccessful
						</div>
						<div class="panel-body">
						There some kind of Posting Error!!
						</div>
					</div>
			  <?php
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
			<script>
                    $(function() {
                      Metis.MetisTable();
                      Metis.metisSortable();
                    });
                </script>
			
</body>
</html>
