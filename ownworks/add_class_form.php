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
									<center><i class="fa fa-square-o"></i>&nbsp;Add  Class Info </center>
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
									<h4 ><p></br>Admin </br>Panel</br></p></h4>
									<small><i class="fa fa-calendar"></i></small>
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
								
								<h3><p class="text-info" style="padding: 30px ">Fill up the following form to enter data in database.
										</br>
								</p></h3>

								<form class="form-horizontal" action="add_class_process.php" method="post">
									<div class="form-group">
									  <label class="control-label col-sm-2" for="classno">Class :</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="classno" placeholder="Enter Class 1 2 3 ..." name="classno" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="roomno">Room No:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="roomno" placeholder="Enter Class Room No 101,102,301... " name="roomno" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="section">Section:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="section" placeholder="Enter Section A,B,C..." name="section" required>
									  </div>
									</div>
									
									<div class="form-group">
									  <label class="control-label col-sm-2" for="classt_id">Class Teacher Id:</label>
									  <div class="col-sm-6">
										  <input type="text" class="form-control" id="classt_id" placeholder="Teacher Id 1001,1005.." name="classt_id" required>
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
                   <?php //include 'rightside.php'?>
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
            <!--<script src="assets/js/app.js"></script>-->
            <script src="assets/js/style-switcher.js"></script>
			
</body>
</html>
