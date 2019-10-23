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
									<center><i class="fa fa-square-o"></i>&nbsp;Home Page </center>
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
								<div class="row" >
								<div class="col-sm-10" style="padding: 50px 0px 30px 20px">
								<div class="alert alert-info" style="padding: 10px 10px 40px 40px">
									
									<h2><p style="padding: 10px "><center><strong>Welcome To Admin Panel.</strong></center></p></h2>
									<h4><p style="padding: 20px">You can access database from here.
									You  can  <strong> Add  Update   Delete  Data  </strong>from database using  The links provided on the <strong>Left side And Top </strong>of the page.
									</p>
									<br>
									<p style="padding: 10px">
									Admin panel also gives you services Like <strong> Search And Show Tables </strong>
									to Make your work easier.
									</p>
									<p style="padding: 10px">
									Make proper use of the services provided. Cheers!!!
									</p></h4>
								 </div>
								 </div>
								</div>
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
            <!-- onoffcanvas
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>-->
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>
            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts 
            <script src="assets/js/app.js"></script>-->
            <script src="assets/js/style-switcher.js"></script>
			
</body>
</html>
