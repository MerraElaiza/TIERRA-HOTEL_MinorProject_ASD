<?php 
    include "../controllers/connections.php"; 
    include "../controllers/checkFunctions.php";
    include "../controllers/userFunctions.php";
    $result = $user->show();
    $userid = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierra Admin</title>
    <link rel="stylesheet" href="addDes/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="addDes/css/user.css">
	<link rel="stylesheet" href="addDes/css/nav1.css">
	<link rel="stylesheet" href="addDes/css/Pretty-Footer-1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
</head>

<body style="background: linear-gradient(to bottom, #ccffcc 0%, #ffffff 100%);">
    <div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><a class="navbar-brand navbar-link" href="#" style="color:#ffffff; font-family:'Open Sans'; ">TIERRA Hotel</a></div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="../views/userList.php">Admin <?php echo $userid ?> </a></li>
                        <li role="presentation" class="active" style="color:#ffffff; background:#73a624; border-bottom: 2px solid white;"><a href="#">Guest Log </a></li>
                        <li role="presentation"><a href="../views/login.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="space" style="text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624;">
        <p class="lead text-uppercase text-info" style=" color: #73a624; font-family: 'Oswald';"><strong>GUEST LOG</strong></p>
    </div>
    <div>
        <div></div>
        
    </div>
    <div class="col-xs-1"></div>
    <div id="table" class="col-xs-10">
        <div class="table-responsive" style="background:#ffffff; padding:30px; color: #73a624; font-size: 15px; font-family:'Open Sans';">
            <table class="table">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Room Type</th>
                        <th>Number of Rooms</th>
                        <th>Number of Guests</th>
                        <th style="width: 19%">Action</th>
                    </tr>
                </thead>
                <tbody>
                	<?php 
							$link = mysqli_connect("localhost:3306", "root", "", "tierra2");
					
							$query = "SELECT * FROM adminreserve";
							$res = mysqli_query($link, $query);
							$res2 = array();
			
							while ($rows = mysqli_fetch_array($res, MYSQLI_BOTH))
							{
								array_push($res2, $rows);
							}
						?>
						<?php foreach($res2 as $value): ?>
                    <tr>
                        <td><?php echo $value['code']; ?></td>
                        <td><?php echo $value['check_in']; ?></td>
                        <td><?php echo $value['check_out']; ?></td>
                        <td><?php echo $value['roomType']; ?></td>
                        <td><?php echo $value['rooms']; ?></td>
                        <td><?php echo $value['guests']; ?></td>
                        <td>
                            <a href="../views/edit.php?edit=yes&code=<?php echo $value['code']; ?>&check_in=<?php echo $value['check_in']; ?>&check_out=<?php echo $value['check_out']; ?>&roomType=<?php echo $value['roomType']; ?>&rooms=<?php echo $value['rooms']; ?>&guests=<?php echo $value['guests']; ?>" class="btn btn-default" type="button" name="edit" value="editTeam" style="background: #73a624; color:#ffffff; padding:5px;">Edit </a>&nbsp;&nbsp;
                            <a href="../views/add.php?delete=TRUE&code=<?php echo $value['code']; ?>&check_in=<?php echo $value['check_in']; ?>&check_out=<?php echo $value['check_out']; ?>&roomType=<?php echo $value['roomType']; ?>&rooms=<?php echo $value['rooms']; ?>&guests=<?php echo $value['guests']; ?>" class="btn btn-default" type="button" style="background: #73a624; color:#ffffff; padding:5px;">Delete </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
	<!--<footer style="position: absolute; text-align: center; padding-top: 20px; padding-bottom: 10px;">
        <p id="choose_footer" class="company-name">Tierra Hotel © 2017. All rights reserved.</p>
    </footer>-->
    <script src="addDes/js/jquery.min.js"></script>
    <script src="addDes/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>