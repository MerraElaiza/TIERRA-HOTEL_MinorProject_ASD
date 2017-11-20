<?php include "../controllers/submit.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
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
    
    <script type="text/javascript">
        function confirmEmail() {
            var email = document.getElementById("email").value
            var confemail = document.getElementById("confemail").value
            
            if(email != confemail) {
                alert('Emails Do Not Match!');
            }
        }
    </script>
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
                    <li role="presentation"><a href="Location.php">CONTACT &amp; LOCATION </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="cont">
        <div class="row" id="book_title">
            <div class="col-md-12" id="choose_column">
                <div id="choose_check">
                    <div class="col-md-4" id="pay_selectcolumn"><i class="glyphicon glyphicon-check"></i>
                        <label id="choose_label1">SELECT ROOM</label>
                    </div>
                    <div class="col-md-4" id="pay_paymentcolumn"><i class="glyphicon glyphicon-unchecked"></i>
                        <label id="choose_label2">MAKE PAYMENT</label>
                    </div>
                    <div class="col-md-4"><i class="glyphicon glyphicon-unchecked"></i>
                        <label id="choose_label3">CONFIRM BOOKING</label>
                    </div>
                </div>
            </div>
			<div class="col-md-12" style="text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624; margin-bottom: 15px;">
                <h2 class="text-left" style=" color: #73a624; font-family: 'Oswald';"><strong>YOUR RESERVATION</strong></h2>
			</div>
        </div>
        <div class="row" id="pay_content" >
            <div class="col-md-12" id="pay_leftcolumn">
                <form id="book_form" action="Confirm.php" method="post">
                    <div class="row" id="pay_row1" style="background: #ffffff;" >
                        <div class="col-md-12" id="pay_col1" >
                            <div>
                                <div class="row" id="petitle">
                                    <div class="col-md-12" id="pay_pe">
                                        <h2>PERSONAL INFORMATION</h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row" id="personal">
                                    <div class="col-md-2" id="pay_1">
										<label>Title *</label>
										<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="title" name="title">
											<option value="Mr." selected="">Mr.</option>
											<option value="Ms.">Ms.</option>
											<option value="Mrs.">Mrs.</option>
											<option value="Miss">Miss</option>
										</select>
                                    </div>
                                    <div class="col-md-5" id="pay_2">
                                            <label>Lastname *</label>
                                            <input class="form-control" type="text" required="" name="l_name">
                                    </div>
                                    <div class="col-md-5" id="pay_3">
                                            <label>Firstname *</label>
                                            <input class="form-control" type="text" required="" name="f_name">
                                    </div>
                                    <div class="col-md-4" id="pay_4">
                                            <label>E-mail address *</label>
                                            <input class="form-control" id="email" type="email" required="" name="e_mail">
                                    </div>
                                    <div class="col-md-4" id="pay_5">
                                            <label>Confirm e-mail *</label>
                                            <input class="form-control" id="confemail" type="email" required="" name="c_mail" onblur="confirmEmail()">
                                    </div>
                                    <div class="col-md-4" id="pay_6">
                                            <label>Phone number *</label>
                                            <input class="form-control" type="text" required="" name="phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="pay_row2" style="background: #ffffff;" >
                        <div class="col-md-12" id="pay_col2" >
                            <div class="jumbotron" id="Description"></div>
                            <div class="row" >
                                <div class="col-md-12" >
                                    <div>
                                        <div class="row" id="cardtitle">
                                            <div class="col-md-12" id="pay_pci">
                                                <h2><strong>PAYMENT CARD INFORMATION</strong></h2>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row" id="card">
                                            <div class="col-md-6" id="pay_7">
                                                    <label>Cardholder's Name *</label>
                                                    <input class="form-control" type="text" required="" name="c_holder">
                                            </div>
                                            <div class="col-md-6" id="pay_8">
                                                    <label>Card Number *</label>
                                                    <input class="form-control" type="text" required="" name="c_num">
                                            </div>
                                            <div class="col-md-4" id="pay_9">
                                                    <label><strong>Card Type *</strong></label>
													<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="cardtype" name="c_type">
														<option value="Visa" selected="">Visa</option>
														<option value="MasterCard">MasterCard</option>
													</select>
                                            </div>
                                            <div class="col-md-8" id="pay_10">
                                                    <label>Valid Until *</label>
													<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="month" name="v_month">
														<option value="01" selected="">Month</option>
														<option value="01">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
														<option value="06">06</option>
														<option value="07">07</option>
														<option value="08">08</option>
														<option value="09">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
													<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="year" name="v_year">
														<option value="2017" selected="">Year</option>
														<option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2019">2019</option>
														<option value="2020">2020</option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
													</select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" id="book_done_column"><input type="submit" name="submit" value="Done" class="submit" style="background: #73a624; color:#ffffff; padding:5px; width:100px;" onclick="confirmEmail()" /></div>
                            </div>
                        </div>
                    </div>
                </form>
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