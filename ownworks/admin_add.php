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
									<center><i class="fa fa-square-o"></i>&nbsp;Data Add Page </center>
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
                            <div class="container">
								<!--<div class="row" >-->
                       
						<div class="row text-center pad-top"style="padding:25px">
						<h2><center><p class="text-success">Welcome to data add service.</br>
								</p></center>
						</h2>
						<h3><center><p class="text-important">Select the required data table form below to add data. 
								</p></center>
						</h3>
						</div>
					   <!--/row-->
				<div class="row text-center pad-top" style="padding: 20px">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="div-square">
                           <a href="add_teacher_form.php" >
							<i class="fa fa-user fa-5x"></i>
                      <h4>Teacher</h4>
                      </a>
                      </div>
                  </div> 
                 
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="div-square">
                           <a href="add_student_form.php" >
							<i class="fa fa-user fa-5x"></i>
                      <h4>Student</h4>
                      </a>
                      </div>                  
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="div-square">
                           <a href="add_director_form.php" >
							<i class="fa fa-user fa-5x"></i>
                      <h4>Director</h4>
                      </a>
                      </div>
                  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="div-square" style="color:#EAEAEA">
                           <a href="add_class_form.php" >
							<i class="fa fa-user fa-5x"></i>
                      <h4>class</h4>
                      </a>
                      </div>
                  </div>
              </div>
			  <!--/row-->
			 <div class="row text-center pad-top" style="padding: 20px">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="div-square">
                           <a href="add_result_form.php" >
							<i class="fa fa-user fa-5x"></i>
                      <h4>Result</h4>
                      </a>
                      </div>
                  </div> 
                 
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="div-square">
                           <a href="add_dependents_form.php" >
							<i class="fa fa-user fa-5x"></i>
                      <h4>Dependents</h4>
                      </a>
                      </div>                  
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="div-square">
                           <a href="add_supervisor_form.php" >
							<i class="fa fa-user fa-5x"></i>
                      <h4>Supervisor</h4>
                      </a>
                      </div>
                  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="div-square">
                           <a href="add_qualification_form.php" >
							<i class="fa fa-user fa-5x"></i>
                      <h4>Teacher Qualification</h4>
                      </a>
                      </div>
                  </div>
              </div>
			  <!--/row-->
								 <!--</div>
								</div>-->
							</div>
							<!--/container-->
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
