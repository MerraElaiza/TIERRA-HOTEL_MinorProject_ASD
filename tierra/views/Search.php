<?php include "../controllers/submit.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Room</title>
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
        <div class="row" id="first">
            <div class="col-md-12" id="choose_column">
                <div id="choose_check">
                    <div class="col-md-4" id="choose_selectcolumn"><i class="glyphicon glyphicon-check"></i>
                        <label id="choose_label1">SELECT ROOM</label>
                    </div>
                    <div class="col-md-4"><i class="glyphicon glyphicon-unchecked"></i>
                        <label id="choose_label2">MAKE PAYMENT</label>
                    </div>
                    <div class="col-md-4"><i class="glyphicon glyphicon-unchecked"></i>
                        <label id="choose_label3">CONFIRM BOOKING</label>
                    </div>
                </div>
            </div>
            <div class="col-md-12" id="choose_title" style="text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624; margin-bottom: 15px;">
                <h2 class="text-left" style=" color: #73a624; font-family: 'Oswald';"><strong>SELECT YOUR ROOM</strong></h2>
            </div>
        </div>
        <div class="row" id="choose_container">
            <div class="col-md-12" id="choose_left">
                <div class="row" id="r1">
                   <div class="col-md-6">
					<div class="carousel slide" data-ride="carousel" id="carousel-1">
						<div class="carousel-inner" role="listbox">
							<div class="item active"><img src="assets\img\single1.jpg" alt="Slide Image" width="100%" height="100%" id="lobby" style="height:380px;"></div>
							<div class="item"><img src="assets/img/single2.jpg" alt="Slide Image" id="pool" style="height:380px;"></div>
							<div class="item"><img src="assets/img/single3.jpg" alt="Slide Image" id="bedroom" style="height:380px;"></div>
							<div class="item"><img src="assets/img/single4.jpg" alt="Slide Image" id="bedroom" style="height:380px;"></div>
							<div class="item"><img src="assets/img/single5.jpg" alt="Slide Image" id="bedroom" style="height:380px;"></div>
						</div>
						<div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
							data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
						<ol class="carousel-indicators">
							<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-1" data-slide-to="1"></li>
							<li data-target="#carousel-1" data-slide-to="2"></li>
							<li data-target="#carousel-1" data-slide-to="3"></li>
							<li data-target="#carousel-1" data-slide-to="4"></li>
						</ol>
					</div>
				</div>
                    <form action="../views/Book.php" method="post">
                    <div class="col-md-6" id="c1" style="background: #ffffff;">
                        <div class="row" id="row1">
                            <div class="col-md-12" >
                                <?php
                                    
                                    /*$link = mysqli_connect("localhost:3306", "root", "", "tierra2");
					                $query = "SELECT * FROM adminreserve";
							        $res = mysqli_query($link, $query);
                                    $res2 = array();
                                
                                    $query2 = "SELECT * FROM book"
                                
                                    while ($rows = mysqli_fetch_array($res, MYSQLI_BOTH))
							        {*/
                                        
                                ?>
                                <div class="jumbotron" id="j1">
                                    <h3 class="text-center"><strong>SINGLE </strong></h3>
                                    <hr>
                                     <p class="text-center">Ideal for backpackers.</p>
									<ul class="collapse" id="single">
									<li>Can accomodate 1 person only.</li>
									<li>1 Single bed: 36" x 80"</li>
									<li>Air conditioning</li>
									<li>Fully equipped toilet and bathroom</li>
									<li>Standard work desk</li>
									<li>Highspeed wireless internet connection</li>
									<li>Electronic Keycard Door Lock System</li>
									</ul>
									<a href="#single" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="single" id="btt4">
									<span class="collapsed"><i class="fa fa-caret-right"></i>Show More Details</span>
									<span class="expanded"><i class="fa fa-caret-right"></i>Show Less</span>
								</a>
                                    <p id="choose_rate1">Rate per Night: <strong>Php </strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row4">
                            <div class="col-md-12" id="row4col"><input type="submit" name="single" value="BOOK THIS ROOM" class="submit" style="background: #73a624; color:#ffffff; padding:5px;"/></div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="row" id="r2">
				    <div class="col-md-6">
					<div class="carousel slide" data-ride="carousel" id="carousel-2">
						<div class="carousel-inner" role="listbox">
							<div class="item active"><img src="assets\img\double1.jpg" alt="Slide Image" width="100%" height="100%" id="lobby" style="height:410px;"></div>
							<div class="item"><img src="assets/img/double2.jpg" alt="Slide Image" id="pool" style="height:410px;"></div>
							<div class="item"><img src="assets/img/double3.jpg" alt="Slide Image" id="bedroom" style="height:410px;"></div>
							<div class="item"><img src="assets/img/double4.jpg" alt="Slide Image" id="bedroom" style="height:410px;"></div>
						</div>
						<div><a class="left carousel-control" href="#carousel-2" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-2" role="button"
							data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
						<ol class="carousel-indicators">
							<li data-target="#carousel-2" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-2" data-slide-to="1"></li>
							<li data-target="#carousel-2" data-slide-to="2"></li>
							<li data-target="#carousel-2" data-slide-to="3"></li>
						</ol>
					</div>
					</div>
                    <form action="../views/Book.php" method="post">
                    <div class="col-md-6" id="c2" style="background: #ffffff;">
                        <div class="row" id="row3">
                            <div class="col-md-12" id="row3col">
                                <div class="jumbotron" id="j2">
                                    <h3 class="text-center"><strong>DOUBLE </strong></h3>
                                    <hr>
                                    <p class="text-center">Ideal for couples or small families. Can accomodate two(2) to three(3) persons (including children).</p>
									<ul class="collapse" id="double">
									<li>Can accomodate 2-3 persons</li>
									<li>1 King size bed: 76" x 80"</li>
									<li>Air conditioning</li>
									<li>Fully equipped toilet and bathroom</li>
									<li>Standard work desk</li>
									<li>LCD colour TV with cable channels</li>
									<li>Highspeed wireless internet connection</li>
									<li>Electronic Keycard Door Lock System</li>
									</ul>
							<a href="#double" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="double" id="btt3">
								<span class="collapsed"><i class="fa fa-caret-right"></i>Show More Details</span>
								<span class="expanded"><i class="fa fa-caret-right"></i>Show Less</span>
							</a>
							<p id="choose_rate1">Rate per Night: <strong>Php </strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row4">
                            <div class="col-md-12" id="row4col"><input type="submit" name="double" value="BOOK THIS ROOM" class="submit" style="background: #73a624; color:#ffffff; padding:5px;"/></div>
                            
                        </div>
                    </div>
                    </form>
                </div>
                <div class="row" id="r3">
                    <div class="col-md-6">
					<div class="carousel slide" data-ride="carousel" id="carousel-3">
						<div class="carousel-inner" role="listbox">
							<div class="item active"><img src="assets\img\twin1.jpg" alt="Slide Image" width="100%" height="100%" id="lobby" style="height:410px;"></div>
							<div class="item"><img src="assets/img/twin2.jpg" alt="Slide Image" id="pool" style="height:410px;"></div>
							<div class="item"><img src="assets/img/twin3.jpg" alt="Slide Image" id="bedroom" style="height:410px;"></div>
							<div class="item"><img src="assets/img/twin4.jpg" alt="Slide Image" id="bedroom" style="height:410px;"></div>
						</div>
						<div><a class="left carousel-control" href="#carousel-3" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-3" role="button"
							data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
						<ol class="carousel-indicators">
							<li data-target="#carousel-3" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-3" data-slide-to="1"></li>
							<li data-target="#carousel-3" data-slide-to="2"></li>
							<li data-target="#carousel-3" data-slide-to="3"></li>
						</ol>
					</div>
					</div>
                    <form action="../views/Book.php" method="post">
                    <div class="col-md-6" id="c3" style="background: #ffffff;">
                        <div class="row" id="row5">
                            <div class="col-md-12" id="row5col">
                                <div class="jumbotron" id="j3">
                                    <h3 class="text-center"><strong>TWIN DOUBLE</strong></h3>
                                    <hr>
                                    <p class="text-center">Ideal for large families or group of friends. Each bed can accomodate two(2) to three(3) persons(including children).</p>
									<ul class="collapse" id="twin">
										<li>Can accomodate 2-3 persons</li>
										<li>2 King size beds: 76" x 80" each</li>
										<li>Refrigerator</li>
										<li>Air conditioning</li>
										<li>Fully equipped toilet and bathroom</li>
										<li>Standard work desk</li>
										<li>LCD colour TV with cable channels</li>
										<li>Highspeed wireless internet connection</li>
										<li>Electronic Keycard Door Lock System</li>
									</ul>
							<a href="#twin" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="twin" id="btt2">
								<span class="collapsed"><i class="fa fa-caret-right"></i>Show More Details</span>
								<span class="expanded"><i class="fa fa-caret-right"></i>Show Less</span>
							</a>
							<p id="choose_rate1">Rate per Night: <strong>Php </strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row6">
                            <div class="col-md-12" id="row6col"><input type="submit" name="twin" value="BOOK THIS ROOM" class="submit" style="background: #73a624; color:#ffffff; padding:5px;"/></div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="row" id="r4">
                    <div class="col-md-6">
					<div class="carousel slide" data-ride="carousel" id="carousel-4">
						<div class="carousel-inner" role="listbox">
							<div class="item active"><img src="assets\img\duplex1.jpg" alt="Slide Image" width="100%" height="100%" id="lobby" style="height:380px;"></div>
							<div class="item"><img src="assets/img/duplex2.jpg" alt="Slide Image" id="pool" style="height:380px;"></div>
						</div>
						<div><a class="left carousel-control" href="#carousel-4" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-4" role="button"
							data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
						<ol class="carousel-indicators">
							<li data-target="#carousel-4" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-4" data-slide-to="1"></li>
						</ol>
					</div>
					</div>
                    <form action="../views/Book.php" method="post">
                    <div class="col-md-6" id="c4" style="background: #ffffff;">
                        <div class="row" id="row7">
                            <div class="col-md-12" id="row7col">
                                <div class="jumbotron" id="j4">
                                    <h3 class="text-center"><strong>DUPLEX </strong></h3>
                                    <hr>
                                    <p class="text-center">A room with two floors.</p>
                            <ul class="collapse" id="duplex">
                                <li>1 King size bed: 76" x 80"</li>
								<li>Refrigerator</li>
								<li>Air conditioning</li>
								<li>Fully equipped toilet and bathroom</li>
								<li>Standard work desk</li>
								<li>LCD colour TV with cable channels</li>
								<li>Highspeed wireless internet connection</li>
								<li>Electronic Keycard Door Lock System</li>
								<li>w/ swimming pool access</li>
                            </ul>
							<a href="#duplex" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="duplex" id="btt1">
								<span class="collapsed"><i class="fa fa-caret-right"></i>Show More Details</span>
								<span class="expanded"><i class="fa fa-caret-right"></i>Show Less</span>
							</a>
							<p id="choose_rate1">Rate per Night: <strong>Php </strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row8">
                            <div class="col-md-12" id="row8col"><input type="submit" name="duplex" value="BOOK THIS ROOM" class="submit" style="background: #73a624; color:#ffffff; padding:5px;"/></div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="row" id="r5">
				<div class="col-md-6">
					<div class="carousel slide" data-ride="carousel" id="carousel-5">
						<div class="carousel-inner" role="listbox">
							<div class="item active"><img src="assets\img\presidential1.jpg" alt="Slide Image" width="100%" height="100%" id="lobby" style="height:380px;"></div>
							<div class="item"><img src="assets/img/presidential2.jpg" alt="Slide Image" id="pool" style="height:380px;"></div>
							<div class="item"><img src="assets/img/presidential3.jpg" alt="Slide Image" id="bedroom" style="height:380px;"></div>
						</div>
						<div><a class="left carousel-control" href="#carousel-5" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-5" role="button"
							data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
						<ol class="carousel-indicators">
							<li data-target="#carousel-5" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-5" data-slide-to="1"></li>
							<li data-target="#carousel-5" data-slide-to="2"></li>
						</ol>
					</div>
					</div>
                    <form action="../views/Book.php" method="post">
                    <div class="col-md-6" id="c5" style="background: #ffffff;">
                        <div class="row" id="row9">
                            <div class="col-md-12" id="row9col">
                                <div class="jumbotron" id="j5">
                                    <h3 class="text-center"><strong>PRESDENTIAL SUITE </strong></h3>
                                    <hr>
                                     <p class="text-center">A room with two or more rooms inside.</p>
                            <ul class="collapse" id="suite">
                                <li>1 King size bed: 76" x 80"</li>
								<li>Refrigerator</li>
								<li>Mini-kitchen</li>
								<li>Air conditioning</li>
								<li>Fully equipped toilet and bathroom with tub</li>
								<li>Standard work desk</li>
								<li>LCD colour TV with cable channels</li>
								<li>Highspeed wireless internet connection</li>
								<li>Electronic Keycard Door Lock System</li>
								<li>w/ swimming pool access</li>
                            </ul>
							<a href="#suite" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="suite" id="btt">
								<span class="collapsed"><i class="fa fa-caret-right"></i>Show More Details</span>
								<span class="expanded"><i class="fa fa-caret-right"></i>Show Less</span>
							</a>
							<p id="choose_rate1">Rate per Night: <strong>Php </strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row10">
                            <div class="col-md-12" id="row10col"><input type="submit" name="p_suite" value="BOOK THIS ROOM" class="submit" style="background: #73a624; color:#ffffff; padding:5px;"/></div>
                        </div><?php //} ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	 <footer>
        <p id="choose_footer" class="company-name">Tierra Hotel © 2017. All rights reserved.</p>
    </footer>
</body>

</html>