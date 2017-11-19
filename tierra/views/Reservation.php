<?php include "../controllers/connections.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Narrow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/nav1.css">
    <link rel="stylesheet" href="assets/css/Rooms-Contents.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Offers-Contents.css">
    <link rel="stylesheet" href="assets/css/Location-Contents.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer-1.css">
    <link rel="stylesheet" href="assets/css/payment.css">
    <link rel="stylesheet" href="assets/css/booking.css">
    <link rel="stylesheet" href="assets/css/search.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php">HOME </a></li>
                    <li role="presentation"><a href="Rooms.php">OUR HOTEL </a></li>
                    <li role="presentation"><a href="Offers.php">SPECIAL OFFERS&nbsp; </a></li>
                    <li role="presentation"></li>
                    <li role="presentation"><a href="Location.php">CONTACT &amp; LOCATION&nbsp; </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="cont">
        <form id="reservation_form" action="Reservation.php" method="get">
            <div class="row">
                <div class="col-md-12" style="text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624; margin-bottom: 15px;">
                    <h2 class="text-left" style=" color: #73a624; font-family: 'Oswald';"><strong>SEARCH RESERVATION</strong></h2></div>
            </div>
            <div class="row">
                <div class="col-md-5" id="reservation_code">
                    <label>Reservation Code</label>
                    <input class="form-control" type="text" id="reservation_code_input" name="rcode" required>
                </div>
                <div class="col-md-5" id="reservation_email">
                    <label>E-mail </label>
                    <input class="form-control" type="text" id="reservation_email_input" name="email" required>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-default" type="submit" id="reservation_searchbutton" name="search" value="search">Search <i class="fa fa-search"></i></button>
                </div>
            </div></form>
            <?php 
        
                    //$obj = (object) array($c_in, $c_out, $roomSize);
                    //var_dump($obj);
                            if ($rcode != "") {
							$link = mysqli_connect("localhost:3306", "root", "", "tierra2");
        
							$query = "SELECT * FROM adminreserve WHERE code = \"".$rcode."\" AND email_add = \"".$email."\"";
							$res = mysqli_query($link, $query);
							$res2 = array();
			
							while ($rows = mysqli_fetch_assoc($res))
							{
							
						?>
            <div class="row" id="reservation_searchresult">
                <div class="col-md-3" id="resrvation_label1">
                    <label>Date </label>
                </div>
                <div class="col-md-3" id="resrvation_label2">
                    <label>Room Type</label>
                </div>
                <div class="col-md-3" id="resrvation_label3">
                    <label>No. of Room(s)</label>
                </div>
                <div class="col-md-3" id="resrvation_label4">
                    <label>Guest(s) </label>
                </div>
                <div class="col-md-3" id="resrvation_column1">
                    <label>Check-in: <?php echo $rows['check_in']; ?> <br> Check-out: <?php echo $rows['check_out']; ?></label>
                </div>
                <div class="col-md-3" id="resrvation_column2">
                    <label><?php echo $rows['roomType']; ?></label>
                </div>
                <div class="col-md-3" id="resrvation_column3">
                    <label><?php echo $rows['rooms']; ?></label>
                </div>
                <div class="col-md-3" id="resrvation_column4">
                    <label><?php echo $rows['guests']; ?></label>
                </div>
            </div>
            <div class="row" id="reservation_lastrow">
                <div class="col-md-12" id="reservation_latcolumn"><a href="../views/Edit_Reservation.php?edit=yes&code=<?php echo $rows['code']; ?>&check_in=<?php echo $rows['check_in']; ?>&check_out=<?php echo $rows['check_out']; ?>&roomType=<?php echo $rows['roomType']; ?>&rooms=<?php echo $rows['rooms']; ?>&guests=<?php echo $rows['guests']; ?>" id="reservation_edit">Edit Reservation <i class="fa fa-edit"></i></a><a href="../views/Reservation.php?delete=TRUE&code=<?php echo $rows['code']; ?>&check_in=<?php echo $rows['check_in']; ?>&check_out=<?php echo $rows['check_out']; ?>&roomType=<?php echo $rows['roomType']; ?>&rooms=<?php echo $rows['rooms']; ?>&guests=<?php echo $rows['guests']; ?>" id="reservation_link">Cancel Reservation <i class="fa fa-times-circle"></i></a></div>
            </div>
            <?php } } ?>
        
    </div>
    <footer>
        <p id="choose_footer" class="company-name">Tierra Hotel © 2016. All rights reserved.</p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>