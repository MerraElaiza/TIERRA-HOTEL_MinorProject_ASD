<?php
  include "../controllers/checkFunctions.php";
  include "../controllers/userFunctions.php";
?>

<html>
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierra Admin</title>
	<link rel="stylesheet" href="addDes/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="addDes/css/user.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  </head>

  <body style="background: linear-gradient(to bottom, #ccffcc 0%, #ffffff 100%);">
      <h3 style="text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624; color: #73a624; font-family: 'Oswald'; padding: 15px;">ADD ADMIN</h3><br><br>
   <div class="col-xs-4"></div>
	<div class="col-xs-4"  style="background: white; padding:20px; color: #73a624;">
    <form method = "POST">
      <label>Username: </label>
      <input class="form-control input-lg" type = "text" name = "username" value = "" required style="font-size: 15px; height: 25px; width:375px;">
      <br><br>
      <label>First Name: </label>
      <input class="form-control input-lg" type = "text" name = "firstname" value = "" required style="font-size: 15px; height: 25px; width:375px;">
      <br><br>
      <label>Last Name: </label>
      <input class="form-control input-lg" type = "text" name = "lastname" value = "" required style="font-size: 15px; height: 25px; width:375px;">
      <br><br>
      <label>Password: </label>
      <input class="form-control input-lg" type = "password" name = "password" value = "" required style="font-size: 15px; height: 25px; width:375px;">
      <br><center>
      <input class = "btn btn-info btn-lg" type = "submit" name = "submit" value = "Submit" style="background: #73a624; color:#ffffff; padding:5px; border: none;">&nbsp;&nbsp;
	  <a href = "../views/userList.php" > <button class = "btn btn-info btn-lg" type = "button" style="background: #73a624; color:#ffffff; padding:5px; border: none;"> Cancel </button> </a></center><br><br>
    </form>
      </div>
	
	<script src="addDes/js/jquery.min.js"></script>
    <script src="addDes/bootstrap/js/bootstrap.min.js"></script>
	
  </body>
</html>