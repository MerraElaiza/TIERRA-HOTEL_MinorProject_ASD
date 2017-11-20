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
    <link rel="stylesheet" href="editDes/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="editDes/css/user.css">
</head>

<body>
    <?php
		$delete = isset($_GET['delete']);
	?>
    <div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><a class="navbar-brand navbar-link" href="#">Tierra Admin</a></div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="../views/userList.php">Admin <?php echo $userid ?> </a></li>
                        <li role="presentation" class="active"><a href="#">Guest Log </a></li>
                        <li role="presentation"><a href="../views/login.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="space">
        <p class="lead text-uppercase text-center text-info">EDIT </p>
    </div>
    <div>
        <div></div>
        <form action="add.php" method="POST">
            <?php 
							$link = mysqli_connect("localhost:3306", "root", "", "tierra2");
					
							$query = "SELECT adults, children FROM book WHERE r_code = \"".$code."\"";
							$res = mysqli_query($link, $query);
							$res2 = array();
			
							while ($rows = mysqli_fetch_assoc($res))
							{
							
						?>
            <input class="form-control input-lg" type="text" placeholder="Code" name="code" value="<?php echo $code ?>" readonly>
            <input class="form-control input-lg" type="date" name="check_in" value="<?php echo $check_in ?>" title="Check-in date" required>
            <input class="form-control input-lg" type="date" name="check_out" value="<?php echo $check_out ?>" title="Check-out date" required>
            <select class="form-control input-lg" id="room" name="roomType" title="Room Type" style="margin-top: 15px">
                <option value="<?php echo $roomType ?>" selected=""><?php echo $roomType ?></option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
				<option value="Twin Double">Twin Double</option>
				<option value="Duplex">Duplex</option>
                <option value="Presidential Suite">Presidential Suite</option>
            </select>
            <input class="form-control input-lg" type="text" placeholder="Number of rooms" name="rooms" value="<?php echo $rooms ?>" title="Please input 1-7 only" required>
            <input class="form-control input-lg" type="text" placeholder="Number of adults" name="adults" value="<?php echo $rows['adults'] ?>" title="Please input 1-4 only" required>
            <input class="form-control input-lg" type="text" placeholder="Number of children" name="children" value="<?php echo $rows['children'] ?>" title="Please input 0-7 only" required><br>
            <center>
                <input class="btn btn-warning btn-lg" type="submit" name="edit" value="Save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="btn btn-warning btn-lg" type="submit" value="Cancel">
            </center><?php } ?>
        </form>
    </div><br><br>
    <div class="col-xs-1"></div>
    <script src="editDes/js/jquery.min.js"></script>
    <script src="editDes/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>