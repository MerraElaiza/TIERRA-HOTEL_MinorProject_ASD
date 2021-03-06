<?php include "../controllers/submit.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

<body id="home_body">
    <nav class="navbar navbar-inverse navbar-fixed-top" id="home_navbar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#"><strong>HOME </strong></a></li>
                    <li role="presentation"><a href="Rooms.php"><strong>OUR HOTEL</strong> </a></li>
                    <li role="presentation"><a href="Offers.php"><strong>SPECIAL OFFERS</strong> </a></li>
                    <li role="presentation"></li>
                    <li role="presentation"><a href="Location.php"><strong>CONTACT &amp; LOCATION </strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div><img class="img-responsive" src="assets/img/tierra_logo6.png" id="logo" ></div>
    <div id="home_content">
        <div class="jumbotron" id="home_jumbotron"><img>
            <h1 class="text-nowrap" id="home_title"><strong>Welcome to Tierra!</strong></h1>
            <p id="home_opening"><strong>Feel relaxed and be with nature in the middle of the city.</strong></p>
        </div>
        <div class="row" id="home_button">
            <div class="col-md-12" id="home_booknow"><a href="#home_searchdetails" id="home_bookbutton" style="background: #ffffff;"><strong>BOOK NOW</strong></a></div>
        </div>
        <div class="row" id="home_searchdetails">
            <div class="col-md-12" style="background: #ffffff;">
                <form id="home_form" action="../views/Search.php" method="post">
                    <div class="col-md-12" id="home_booklabelcolumn" >
                        <h2 id="home_bookaroomlabel" ><strong>Book a Room</strong></h2></div>
                    <div class="col-md-12" id="home_bookcolumn1"><img src="assets/img/border.png" id="home_imgborder"></div>
                    <div class="col-md-7" id="home_bookcolumn2">
                        <div class="row" id="home_daterow">
                            <div class="col-md-6" id="home_check_in_column">
                                <label id="home_label1">Check-in </label>
                                <input class="form-control" type="date" id="home_date1" name="c_in" style="background: #ffffff;">
                            </div>
                            <div class="col-md-6" id="home_check_out_column">
                                <label id="home_label2">Check-out </label>
                                <input class="form-control" type="date" id="home_date2" name="c_out" style="background: #ffffff;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row" id="home_otherdetailsrow">
                            <div class="col-md-4">
                                <label id="home_label3">Room(s) </label>
								<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="room_s" name="rooms">
									<option value="1" selected="">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
								</select>
                            </div>
                            <div class="col-md-4">
                                <label id="home_label4">Adult(s) </label>
								<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="adult_s" name="adults">
									<option value="1" selected="">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
                            </div>
                            <div class="col-md-4">
                                <label id="home_label5">Child(ren) </label>
								<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="children" name="children">
									<option value="0" selected="">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="colFind">
                       <input id="home_checkbutton" type="submit" name = "submit" value = "Submit" class = "submit"/><br><a href="Reservation.php" id="home_cancel"><span style="text-decoration: underline;">Change/Cancel Reservation</span></a></div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>