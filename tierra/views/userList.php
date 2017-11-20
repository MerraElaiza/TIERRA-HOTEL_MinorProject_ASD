<?php
  include "../controllers/checkFunctions.php";
  include "../controllers/userFunctions.php";
  include "../controllers/connections.php";
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
    <link rel="stylesheet" href="addDes/css/user2.css">
	<link rel="stylesheet" href="addDes/css/nav1.css">
	<link rel="stylesheet" href="addDes/css/Pretty-Footer-1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
</head>

<body style="background: linear-gradient(to bottom, #ccffcc 0%, #ffffff 100%); overflow-x: hidden;">
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
            <li class="active" role="presentation" style="color:#ffffff; border-bottom: 2px solid white;"><a href="#">Admin <?php echo $userid ?> </a></li>
            <li role="presentation"><a href="../views/add.php">Guest Log </a></li>
            <li role="presentation"><a href="../views/login.php">Sign Out </a></li>
          </ul>
        </div>
      </div>
    </nav>
	
    <div id="space" style="text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624;">
        <p class="lead text-uppercase text-info" style=" color: #73a624; font-family: 'Oswald';"><strong>Administrators</strong></p>
    </div>
    <div class="col-md-4 col-md-offset-10">
      <form action = "../views/addUser.php" method = "POST">
        <button type = "submit" name = "submit" value = "Add User" class="btn btn-default" style="background: #73a624; color:#ffffff; padding:5px; width: 85px; margin: 5px;">Add Admin</button>
      </form>
    </div>
    <div class="row">
    <section></section>
    <center><div class="col-xs-1"></div>
        <div id="table" class="col-xs-10">
        <div class="table-responsive" style="background:#ffffff; padding:30px; color: #73a624; font-size: 15px; font-family:'Open Sans';">
            <table class="table">
                <thead>
                    <tr>
                        <th>Admin</th>
                        <th>Username </th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th style="width: 5%">Action </th>
                        <th style="width: 5%"></th>
                    </tr>
                </thead>
                <tbody>
                  <?php while ($rows = $result->fetch_assoc()): ?>
                    <tr>
                      <td><?php echo $rows['userid']; ?></td>
                      <td><?php echo $rows['username']; ?></td>
                      <td><?php echo $rows['firstname']; ?></td>
                      <td><?php echo $rows['lastname']; ?></td>
                      <td>

                        <form action = "./editUser.php?edit=true&userid=<?php echo $rows['userid']; ?>" method = "POST">
                            <?php if ($userid == 00000000001):?>
                                <button type = "submit" name = "edit" value = "Edit User" class = "btn btn-default" style="background: #73a624; color:#ffffff; padding:5px;">Edit</button>
                            <?php else : ?>
                                <?php if ($rows['userid'] == $userid):?>
                                    <button type = "submit" name = "edit" value = "Edit User" class = "btn btn-default " style="background: #73a624; color:#ffffff; padding:5px;">Edit</button>
                                <?php else: ?>
                                    <button type = "submit" name = "edit" value = "Edit User" class = "btn btn-default" style="background: #73a624; color:#ffffff; padding:5px;" disabled>Edit</button>
                                <?php endif; ?>
                            <?php endif; ?>
                        </form>
					  </td>
					  <td>
                        <form action = "./userList.php?delete=true&userid=<?php echo $rows['userid']; ?>" method = "POST">
                          <?php if ($userid == 00000000001):?>
                            <?php if ($rows['userid'] == 00000000001):?>
                                <button type = "submit" name = "delete" value = "Delete" class = "btn btn-default" style="background: #73a624; color:#ffffff; padding:5px;" disabled>Delete</button>
                            <?php else: ?>
                                <button type = "submit" name = "delete" value = "Delete" class = "btn btn-default" style="background: #73a624; color:#ffffff; padding:5px;">Delete</button>
                            <?php endif; ?>
                          <?php else: ?>
                            <button type = "submit" name = "delete" value = "Delete" class = "btn btn-default" style="background: #73a624; color:#ffffff; padding:5px;" disabled>Delete</button>
                          <?php endif; ?>
                        </form>

                      </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            </div>
        </div></center>
		</div>
		
		<div class="row" style="padding: 50px;">		
			<center><div class="collapse" id="edit">
			<div class="row">
				<div class="col-md-12" style="text-align: left; text-indent:30px; width:50%; border-bottom: 4px solid #73a624;">
					<h3 class="text-left" style=" color: #73a624; font-family: 'Oswald';"><strong>EDIT ROOM RATES</strong></h3></div>
					</div>
					<form id="admin_room_form" action="" method="post">
						<div class="row" style="margin-top: 20px; margin-button: 20px;">
							<div class="col-md-5">
								<div class="row" style="margin-left:20px;">
								<label style="color: #73a624; font-size:15px;">Room Type</label>
								</div>
								<div class="row">
								<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="room" style="color: #73a624; font-size: 20px; width: 400px; height:33px; background: transparent; border: 1px solid #73a624; border-radius: 5px;" name="room_type">
								<option value="Single" selected="">Single</option>
								<option value="Double">Double</option>
								<option value="Twin Double">Twin Double</option>
								<option value="Duplex">Duplex</option>
								<option value="Presidential Suite">Presidential Suite</option>
								</select>
								</div>
							</div>
							<div class="col-md-5">
								<div class="row">
								<label style="color: #73a624; font-size:15px;">Rate </label>
								</div>
								<div class="row">
								<input class="form-control" type="text" id="rate_input" style="background: transparent; border: 1px solid #73a624; width: 400px;" name="room_rate">
								</div>
							</div>
							<div class="col-md-2">
								<button class="btn btn-default" type="submit" id="submit_button" style=" margin-top:20px; margin-left:25px; background:#73a624; color:#ffffff; width: 100px;" name="submit" value="submit">Submit </button>
							</div>
							</div>
					</form>
									</div>
							<a href="#edit" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="edit" id="btt2" style="border:2px solid #73a624; background:none; color:#73a624; margin: 25px;">
								<span class="collapsed"><i class="fa fa-caret-right"></i>Edit Rates</span>
								<span class="expanded"><i class="fa fa-caret-right"></i>Close</span>
                </a></center>
		</div>
    <script src="addDes/js/jquery.min.js"></script>
    <script src="addDes/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
