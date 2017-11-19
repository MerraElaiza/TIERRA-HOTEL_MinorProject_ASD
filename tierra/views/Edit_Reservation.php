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
    <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar" style="opacity: 0.1">
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
        <form id="reservation_form" action="Reservation.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-left" style=" color: #73a624; font-family: 'Oswald'; text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624; margin-bottom: 15px; padding-bottom: 10px;"><strong>EDIT RESERVATION</strong></h2>
                    <?php 
							$link = mysqli_connect("localhost:3306", "root", "", "tierra2");
					
							$query = "SELECT adults, children FROM book WHERE r_code = \"".$code."\"";
							$res = mysqli_query($link, $query);
                            $res2 = array();
			
							while ($rows = mysqli_fetch_assoc($res))
							{
							
						?>
                    
                        <div class="row" id="choose_search">
                            <div class="col-md-1">
                                <label id="choose_l1">Code </label>
                                <input class="form-control" type="text" id="check-in" name="code" value="<?php echo $code ?>" readonly>
                            </div>
                            <div class="col-md-2">
                                <label id="choose_l1">Check-in </label>
                                <input class="form-control" type="date" id="check-in" name="check_in" value="<?php echo $check_in ?>">
                            </div>
                            <div class="col-md-2">
                                <label id="choose_l2">Check-out </label>
                                <input class="form-control" type="date" id="check-out" name="check_out" value="<?php echo $check_out ?>">
                            </div>
                            <div class="col-md-7" id="search_infos">
                                <div class="row">
								<div class="col-md-3">
                                    <label id="choose_l5">Type</label>
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="type" name="roomType">
											<option value="<?php echo $roomType ?>" selected=""><?php echo $roomType ?></option>
                                            <option value="Single">Single</option>
											<option value="Double">Double</option>
											<option value="Twin Double">Twin Double</option>
											<option value="Duplex">Duplex</option>
											<option value="Presidential Suite">Presidential Suite</option>
										</select>
                                    </div>
                                    <div class="col-md-2">
                                        <label id="choose_l3">Room(s) </label>
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="room_s" name="rooms">
											<option value="<?php echo $rooms ?>" selected=""><?php echo $rooms ?></option>
                                            <option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
                                            <option value="6">6</option>
											<option value="7">7</option>
										</select>
                                    </div>
                                    <div class="col-md-2">
                                        <label id="choose_l4">Adult(s) </label>
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="adult_s" name="adults">
											<option value="<?php echo $rows['adults']; ?>" selected=""><?php echo $rows['adults'] ?></option>
                                            <option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
                                    </div>
                                    <div class="col-md-2">
                                        <label id="choose_l5">Child(ren) </label>
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="children" name="children">
											<option value="<?php echo $rows['children']; ?>" selected=""><?php echo $rows['children']; ?></option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
                                    </div><?php } ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row" id="reservation_lastrow">
                <div class="col-md-12" id="reservation_latcolumn"><input id="edit_done" type="submit" name="edit" value="Save"></div>
            </div>
        </form>
    </div>
    <footer>
        <p id="choose_footer" class="company-name">Tierra Hotel © 2017. All rights reserved.</p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>