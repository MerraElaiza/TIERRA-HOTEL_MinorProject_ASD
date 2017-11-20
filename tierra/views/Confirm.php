<?php include "../controllers/connections.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
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
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php">HOME </a></li>
                    <li role="presentation"><a href="Rooms.php">OUR HOTEL </a></li>
                    <li role="presentation"><a href="#">SPECIAL OFFERS&nbsp; </a></li>
                    <li role="presentation"></li>
                    <li role="presentation"><a href="Location.php">CONTACT &amp; LOCATION&nbsp; </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="cont">
        <div class="row" id="first">
            <div class="col-md-12" id="choose_column">
                <div id="choose_check">
                    <div class="col-md-4" id="confirm_selectcolumn"><i class="glyphicon glyphicon-check"></i>
                        <label id="choose_label1">SELECT ROOM</label>
                    </div>
                    <div class="col-md-4" id="confirm_selectpayment"><i class="glyphicon glyphicon-check"></i>
                        <label id="choose_label2">MAKE PAYMENT</label>
                    </div>
                    <div class="col-md-4" id="confirm_selectconfirm"><i class="glyphicon glyphicon-unchecked"></i>
                        <label id="choose_label3">CONFIRM BOOKING</label>
                    </div>
                </div>
            </div>
            <div class="col-md-12" id="confirm_title" style="text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624; margin-bottom: 15px;">
                <h2 class="text-left" style=" color: #73a624; font-family: 'Oswald';"><strong>CONFIRM YOUR BOOKING</strong></h2></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <?php 
							$link = mysqli_connect("localhost:3306", "root", "", "tierra2");
					
							$query = "SELECT * FROM adminreserve ORDER BY id DESC LIMIT 1";
							$res = mysqli_query($link, $query);
                            $res2 = array();
			
							while ($rows = mysqli_fetch_assoc($res))
							{
                                $query2 = "SELECT room_rate FROM rooms WHERE room_type = \"".$rows['roomType']."\"";
                                $result = mysqli_query($link, $query2);
                                $row = mysqli_fetch_assoc($result);
                                
                                $in = date_create($rows['check_in']);
                                $out = date_create($rows['check_out']);
                                $datediff = date_diff($in, $out);
                                $days = $datediff->format("%a");
                                
                                $total = $rows['rooms'] * $row['room_rate'] * $days;
						?>
                    <h2>YOUR BOOKING</h2>
                    <hr>
                    <div class="col-md-6" id="confirm_labelcheck-incolumn">
                        <label id="confirm_labelcode">Reservation Code </label>
                    </div>
                    <div class="col-md-6" id="confirm_text_areacheck-incolumn">
                        <label id="confirm_labelcode" style="color:red"><?php echo $rows['code']; ?></label>
                    </div>
                    <div class="col-md-6" id="confirm_labelcheck-incolumn">
                        <label id="confirm_labelcheck-in">Check-in Date</label>
                    </div>
                    <div class="col-md-6" id="confirm_text_areacheck-incolumn">
                        <label id="confirm_labelcheck-in" style="color:black"><?php echo $rows['check_in']; ?></label>
                    </div>
                    <div class="col-md-6" id="confirm_labelcheck-outcolumn">
                        <label id="confirm_labelcheck-out">Check-out Date</label>
                    </div>
                    <div class="col-md-6" id="confirm_text_areacheck-outcolumn">
                        <label id="confirm_labelcheck-in" style="color:black"><?php echo $rows['check_out']; ?></label>
                    </div>
                    <div class="col-md-6" id="confirm_labelguestcolumn">
                        <label id="confirm_labelroom">Room Type</label>
                    </div>
                    <div class="col-md-6" id="confirm_text_areaguestcolumn">
                        <label id="confirm_labelcheck-in" style="color:black"><?php echo $rows['roomType']; ?></label>
                    </div>
                    <div class="col-md-6" id="confirm_labelguestcolumn">
                        <label id="confirm_labelroomcount">No. of Room(s)</label>
                    </div>
                    <div class="col-md-6" id="confirm_text_areaguestcolumn">
                        <label id="confirm_labelroom" style="color:black"><?php echo $rows['rooms']; ?></label>
                    </div>
                    <div class="col-md-6" id="confirm_labelguestcolumn">
                        <label id="confirm_labelguest">Guest(s) </label>
                    </div>
                    <div class="col-md-6" id="confirm_text_areaguestcolumn">
                        <label id="confirm_labelguest" style="color:black"><?php echo $rows['guests']; ?></label>
                    </div>
                    <div class="col-md-6" id="confirm_labelpaymentcolumn">
                        <label id="confirm_labelpayment">Total Payment</label>
                    </div>
                    <div class="col-md-6" id="confirm_text_areapaymentcolumn">
                        <label id="confirm_labelpayment" style="color:black"><?php echo "Php ".$total; ?></label>
                    </div>
                    <div class="col-md-12" id="confirm_buttoncolumn"><a href="Rooms.php?delete=TRUE&code=<?php echo $rows['code']; ?>" id="confirm_cancel" type="button">Cancel </a><a href="index.php" id="confirm_confirm">Confirm </a></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p id="choose_footer" class="company-name">Tierra Hotel © 2017. All rights reserved.</p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>