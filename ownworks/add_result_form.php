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
									<center><i class="fa fa-square-o"></i>&nbsp;Add  Result Info </center>
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
								
								<h3><p class="text-info"style="padding:30px">Fill up the following form to enter data in database.
										</br>
								</p></h3>

								<form class="form-horizontal" action="add_result_process.php" method="post">
									<div class="form-group">
									  <label class="control-label col-sm-2" for="class">Class :</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="class" placeholder="Enter Class 1 2 3 ..." name="class" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="year">Year:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="year" placeholder="Enter Year 2017... " name="year" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="totalnum">Total Number:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="totalnum" placeholder="Enter Total Number 950,940..." name="totalnum" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="sid">Student Id:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="sid" placeholder="Student Id 1001,1005.." name="sid" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="tid">Class Teacher Id:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="tid" placeholder="Teacher Id 1001,1005.." name="tid" required>
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
