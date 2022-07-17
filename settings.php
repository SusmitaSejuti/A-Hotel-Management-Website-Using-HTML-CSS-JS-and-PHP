<?php  
session_start(); 
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOTEL DS PALACE</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MAIN MENU </a>
            </div>

            
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a   href="settings.php"><i class="fa fa-dashboard"></i>Room Status</a>
                    </li>
					<li>
                        <a  href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a   href="roomdel.php"><i class="fa fa-pencil-square-o"></i> Delete Room</a>
                    </li>
					<li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Reservation Info</a>
                    </li>
                    <li>
                        <a  href="payment.php"><i class="fa fa-qrcode"></i> Customer Information</a>
                    </li>
                    <li>
                        <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>

                    
            </div>

        </nav> 
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Available <small> Rooms</small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <?php
						include ('db.php');
						$sql = "select * from room";
						$re = mysqli_query($con,$sql)
				?>
                <div class="row">
				
				
				<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['type'];
											if($id == "Superior Room") 
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-blue'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-blue'>
															".$row['type']."

														</div>
													</div>
												</div>";
											}
											else if ($id == "Deluxe Room")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-green'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-green'>
															".$row['type']."

														</div>
													</div>
												</div>";
											
											}
											else if($id =="Guest House")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-brown'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-brown'>
															".$row['type']."

														</div>
													</div>
												</div>";
											
											}
											else if($id =="Single Room")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-red'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-red'>
															".$row['type']."

														</div>
													</div>
												</div>";
											
											}
										}
									?>
                </div>
                
            </div>
         
        </div>
     
    <script src="assets/js/jquery-1.10.2.js"></script>
     
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script src="assets/js/jquery.metisMenu.js"></script>
     
    <script src="assets/js/custom-scripts.js"></script>
    
</body>
</html>
