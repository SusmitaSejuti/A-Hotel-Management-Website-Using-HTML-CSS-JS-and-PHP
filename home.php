<?php
session_start();
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator </title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

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
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
            </div>
            </li>
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="settings.php"><i class="fa fa-dashboard"></i>Room Status</a>
                    </li>
                    <li>
                        <a href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a href="roomdel.php"><i class="fa fa-pencil-square-o"></i> Delete Room</a>
                    </li>
                    <li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Reservation Info</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Customer Information</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Reservation Info
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <?php
                include('db.php');
                $sql = "select * from roombook";
                $re = mysqli_query($con, $sql);
                $c = 0;
                while ($row = mysqli_fetch_array($re)) {
                    $new = $row['stat'];
                    $cin = $row['cin'];
                    $id = $row['id'];
                    if ($new == "Not Confirm") {
                        $c = $c + 1;
                    }
                }

                ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                            </div>
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                            <div class="panel-body">
                                                <div class="panel panel-default">

                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Country</th>
                                                                        <th>Room</th>
                                                                        <th>Bedding</th>
                                                                        <th>Meal</th>
                                                                        <th>Check In</th>
                                                                        <th>Check Out</th>
                                                                        <th>Status</th>
                                                                        <th>More</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <?php
                                                                    $tsql = "select * from roombook";
                                                                    $tre = mysqli_query($con, $tsql);
                                                                    while ($trow = mysqli_fetch_array($tre)) {
                                                                        $co = $trow['stat'];
                                                                        if ($co == "Not Confirm") {
                                                                            echo "<tr>
												<th>" . $trow['id'] . "</th>
												<th>" . $trow['FName'] . " " . $trow['LName'] . "</th>
												<th>" . $trow['Email'] . "</th>
												<th>" . $trow['Country'] . "</th>
												<th>" . $trow['TRoom'] . "</th>
												<th>" . $trow['Bed'] . "</th>
												<th>" . $trow['Meal'] . "</th>
												<th>" . $trow['cin'] . "</th>
												<th>" . $trow['cout'] . "</th>
												<th>" . $trow['stat'] . "</th>
												
												<th><a href='roombook.php?rid=" . $trow['id'] . " ' class='btn btn-primary'>BOOKING</a></th>
												</tr>";
                                                                        }
                                                                    }
                                                                    ?>

                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>
    </div>

    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.metisMenu.js"></script>

    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>

    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>