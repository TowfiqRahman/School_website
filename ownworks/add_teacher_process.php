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
                            <div class="main-bar">
                                <h3>
									<center><i class="fa fa-square-o"></i>&nbsp;Add  Teacher Info </center>
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
                                        <li>Accessed  <br>
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
<div class="container">
<?php
	include 'mysqli_connect.php';
if(isset($_POST['submit'])){
        $id          = validate_input($_POST['id']);
        $f_name      = validate_input($_POST['f_name']);
        $l_name      = validate_input($_POST['l_name']);
        $sex         = validate_input($_POST['sex']);
		$contact_no  = validate_input($_POST['contact_no']);
        $b_date      = validate_input($_POST['b_date']);
        $designation    = validate_input($_POST['$column']);
        $head_id   = validate_input($_POST['head_id']);
		
		$headmaster = "yes";
        $assistant_teacher="Yes";
		if($designation == "headmaster"){
			$assistant_teacher="NO";
		}
		else{
			$headmaster = "No";
		}
        $query = "INSERT INTO teacher (id, f_name, l_name, sex,
        contact_no, b_date,headmaster,assistant_teacher,head_id)VALUES ('$id', '$f_name', '$l_name', '$sex','$contact_no',
         '$b_date', '$headmaster', '$assistant_teacher', '$head_id')";
		 
		$query3 = "INSERT INTO teacher_qualification (teach_id)VALUES ('$id')";
		
		$query2 = "INSERT INTO dependents (t_id)VALUES ('$id')";
        if(mysqli_query($dbc, $query)){
			
			mysqli_query($dbc, $query3);
			mysqli_query($dbc, $query2);
			
			echo "<div class=\"col-lg-10 panel panel-primary \">
						<div class=\"panel-heading\">Data Adding Successful
						</div>
						<div class=\"panel-body\">
						Your Data Has Successfully Added to Data Base
						</div>
					</div>
			  ";
		}
		
    else {
        
        die('Query Error!!'.mysqli_error($dbc));
    }
	mysqli_close($dbc);
}
	else{
		echo "<div class=\"col-lg-10 panel panel-danger \">
						<div class=\"panel-heading\">Data Adding Unsuccessful
						</div>
						<div class=\"panel-body\">
						There some kind of Posting Error!!
						</div>
					</div>
			  ";
	}
	
function validate_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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

