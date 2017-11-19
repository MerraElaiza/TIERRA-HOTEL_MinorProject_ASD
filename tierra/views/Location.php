<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location and Contact</title>
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
                    <li class="active" role="presentation"><a href="#">CONTACT &amp; LOCATION </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="cont">
        <div class="row" id="first">
                <div class="jumbotron" style="text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624; margin-bottom: 15px; padding:0px;">
                    <h2 style=" color: #73a624; font-family: 'Oswald';"><strong>OUR LOCATION</strong></h2>
            </div>
        </div>
        <div id="mapdiv"></div>
    </div>
    <div class="row" id="first">
        <div class="col-md-12" id="first_row">
            <div class="jumbotron" id="Description">
				<div class="row"  style="text-align: left; text-indent:50px; width:70%; border-bottom: 4px solid #73a624; margin-bottom: 15px;">
					<h2 style=" color: #73a624; font-family: 'Oswald';"><strong>CONTACT</strong></h2>
				</div>
                <div class="row" id="maplastrow">
                    <div class="col-md-12" id="maprow1">
                        <div id="mapdiv1">
                            <div class="jumbotron" id="mapj1">
                                <p id="i">For reservations, comments and concerns:</p>
                                <p id="t"><strong>Telephone No. </strong><i class="fa fa-phone"></i></p>
                                <p>(082) 241-0566 </p>
                                <p id="e"><strong>E-mail </strong><i class="fa fa-envelope-o"></i></p>
                                <p>info@tierrahotel.com </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row" id="footer_row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Tierra Hotel</a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Our Hotel</a><strong> · </strong><a href="#">Offers </a><strong> · </strong><a href="#">Location </a><strong> · </strong><a href="#">Faq</a><strong> </strong></p>
                <p class="company-name">Tierra Hotel © 2017</p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">J.P. Laurel Ave </span> Davao City, Philippines</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left">(082) 241-0566&nbsp; </p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p>info@tierrahotel.com </p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About Us</h4>
                <p><strong>Tierra Hotel | Espinosa | Good | Lamberte | Ormo | Application Systems Development | BSIT-3A</strong> </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>