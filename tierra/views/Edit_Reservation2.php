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
        <form id="reservation_form" action="Reservation.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-left" style=" color: #73a624; font-family: 'Oswald'; text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624; margin-bottom: 15px; padding-bottom: 10px;"><strong>EDIT RESERVATION</strong></h2>
                    <?php 
							$link = mysqli_connect("localhost:3306", "root", "", "tierra2");
                    
                            $query3 = "SELECT * FROM adminreserve WHERE roomType = \"".$roomSize."\" AND code != \"".$r_code."\"";
                            $res3 = mysqli_query($link, $query3);
                                    
                            $count = 0;
                            $cin = new DateTime($c_in);
                            $cout = new DateTime($c_out);
                    
                            while($row = mysqli_fetch_assoc($res3)) {
                                $cin2 = new DateTime($row['check_in']);
                                $cout2 = new DateTime($row['check_out']);
                                        
                                if ($roomSize == "Presidential Suite" || $roomSize == "Duplex") {
                                    //if (mysqli_num_rows($res3) == 2) {
                                        if ($cin <= $cin2 && $cout > $cin2 && $cout <= $cout2) {
                                            $count = $count + 1;
                                        }
                                        else if ($cin >= $cin2 && $cin < $cout2 && $cout >= $cout2) {
                                            $count = $count + 1;
                                        }
                                        else if ($cin >= $cin2 && $cin <= $cout2 && $cout <= $cout2) {
                                            $count = $count + 1;
                                        }
                                        else if ($cin <= $cin2 && $cout >= $cout2) {
                                            $count = $count + 1;
                                        }
                                   // }
                                            
                                }
                                if ($roomSize == "Single" || $roomSize == "Double" || $roomSize == "Twin Double") {
                                   // if (mysqli_num_rows($res3) == 7) {
                                        if ($cin <= $cin2 && $cout > $cin2 && $cout <= $cout2) {
                                            $count = $count + 1;
                                        }
                                        else if ($cin >= $cin2 && $cin < $cout2 && $cout >= $cout2) {
                                            $count = $count + 1;
                                        }
                                        else if ($cin >= $cin2 && $cin <= $cout2 && $cout <= $cout2) {
                                            $count = $count + 1;
                                        }
                                        else if ($cin <= $cin2 && $cout >= $cout2) {
                                            $count = $count + 1;
                                        }
                                   // }
                                            
                                }
                            }
                                    
                    ?>
                </div>
            </div>
            <?php
                
                if ($roomSize == "Presidential Suite" || $roomSize == "Duplex") {
                    if ($count == 2) {
                        echo "<center><h3> No Available Rooms</h3><br><h5>Please use browser back button to return to editing.</h5></center>";
                    }
                    else {
                        echo "<center><h3>".(2 - $count)." Room(s) Available </h3><br><h5>Please use browser back button to return to editing.</h5></center>";
            ?>
            <div class="row" id="reservation_lastrow">
                <div class="col-md-12" id="reservation_latcolumn"><input id="edit_done" type="submit" name="edit" value="Save"></div>
            </div>
            <?php } } 
            
                else if ($roomSize == "Single" || $roomSize == "Double" || $roomSize == "Twin Double") {
                    if ($count == 7) {
                        echo "<center><h3> No Available Room(s)</h3><br><h5>Please use browser back button to return to editing.</h5></center>";
                    }
                    else {
                        echo "<center><h3>".(7 - $count)." Available Room(s) </h3><br><h5>Please use browser back button to return to editing.</h5></center>";
            ?>
            <center><div class="row" id="reservation_lastrow">
                <div class="col-md-12" id="reservation_latcolumn"><input id="edit_done" type="submit" name="edit" value="Save"></div>
            </div></center>
            <?php } } ?>
        </form>
    </div>
    <footer>
        <p id="choose_footer" class="company-name">Tierra Hotel © 2017. All rights reserved.</p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>