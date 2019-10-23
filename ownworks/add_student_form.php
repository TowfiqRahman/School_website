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
									<center><i class="fa fa-square-o"></i>&nbsp;Add  Student Info </center>
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
                                        <li>Accessed <br>
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
								
								<h3><p class="text-info"style="padding:30px">Fill up the following form to enter data in database.
										</br>
								</p></h3>

								<form class="form-horizontal" action="add_student_process.php" method="post">
									<div class="form-group">
									  <label class="control-label col-sm-2" for="id">ID:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="id" placeholder="Enter ID" name="id" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="f_name">First Name:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="f_name" placeholder="Enter First Name" name="f_name" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="l_name">Last Name:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" name="l_name" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="sex">Sex:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="sex" placeholder="Sex" name="sex" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="father_name">Father Name:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="father_name" placeholder="Enter Father Name" name="father_name" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="mother_name">Mother Name:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="mother_name" placeholder="Enter Mother Name" name="mother_name" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="b_date">Birth Date:</label>
									  <div class="col-sm-6">
										  <input type="date" class="form-control" id="b_date" placeholder="dd/mm/yyyy" name="b_date" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="edu_year">Education Year:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="edu_year" placeholder="Education Year" name="edu_year" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="address">Address:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="s_classno">Class:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="s_classno" placeholder="Enter Present Class" name="s_classno" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="contact_no">Contact No:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact No" name="contact_no" required>
									  </div>
									</div>
									
									<div class="form-group">        
									  <div class="col-sm-offset-2 col-sm-6">
										<input type="submit" class="btn btn-primary" name="submit" value="Send" />
									  </div>
									</div>	
							  </form>
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
