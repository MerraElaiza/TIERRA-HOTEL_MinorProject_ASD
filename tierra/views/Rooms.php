<?php include "../controllers/connections.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Hotel</title>
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
                    <li class="active" role="presentation"><a href="Rooms.php">OUR HOTEL</a></li>
                    <li role="presentation"><a href="Offers.php">SPECIAL OFFERS&nbsp; </a></li>
                    <li role="presentation"></li>
                    <li role="presentation"><a href="Location.php">CONTACT &amp; LOCATION&nbsp; </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="cont">
        <div class="row" id="first">
            <div class="col-md-12" id="first_row" >
                <div class="jumbotron" id="Description">
					<div id="head" style="text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624; margin-bottom: 15px;">
						<h2 style=" color: #73a624; font-family: 'Oswald';"><strong>OUR HOTEL</strong></h2>
					</div>
                    <div id="firstpar">
                        <p class="text-justify" id="par">Feel relaxed and admire the beauty of nature with Tierra Hotel. Our hotel offers you 25 exquisitely designed rooms inspired by nature that are fully-equipped with modern amenities for our guests' comfort. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="rooms_carousel">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="item"><img class="img-rounded" src="assets/img/cover.jpg" alt="Slide Image" width="100%" height="100%" id="lobby"></div>
                        <div class="item active"><img src="assets/img/pool.jpg" alt="Slide Image" id="pool"></div>
                        <div class="item"><img src="assets/img/view.jpg" alt="Slide Image" id="bedroom"></div>
                    </div>
                    <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
                        data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0"></li>
                        <li data-target="#carousel-1" data-slide-to="1" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
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
                    <p class="footer-center-info email text-left">(082) 241-0566 </p>
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