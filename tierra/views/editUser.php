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
    <h3  style="text-align: left; text-indent:30px; width:70%; border-bottom: 4px solid #73a624; color: #73a624; font-family: 'Oswald'; padding: 15px;" >EDIT ADMIN</h3><br><br>
	<div class="col-xs-4"></div>
	<div class="col-xs-4" style="background: white; padding:20px; color: #73a624;">
    <form method = "POST">
      <label>User ID: </label>
      <input class="form-control input-lg" type = "text" name = "userid" disabled style="font-size: 15px; height: 25px; width:375px;"
      <?php echo "value = \"".$_GET['userid']."\"" ?>>
      <br><br>
      <label>Username: </label>
      <input class="form-control input-lg" type = "text" name = "username" style="font-size: 15px; height: 25px; width:375px; color: #73a624;"
      <?php echo "value = \"".$details['username']."\"" ?>>
      <br><br>
      <label>First Name: </label>
      <input class="form-control input-lg" type = "text" name = "firstname" style="font-size: 15px; height: 25px; width:375px; color: #73a624;"
      <?php echo "value = \"".$details['firstname']."\"" ?>>
      <br><br>
      <label>Last Name: </label>
      <input class="form-control input-lg" type = "text" name = "lastname" style="font-size: 15px; height: 25px; width:375px; color: #73a624;"
      <?php echo "value = \"".$details['lastname']."\"" ?>>
      <br><br>
      <label>Password: </label>
      <input class="form-control input-lg" type = "password" name = "password" style="font-size: 15px; height: 25px; width:375px; color: #73a624;"
      <?php 
    
        $key = 'qyrdhDT783jsndJUfdgKasas8hsfD6jh';
        $details['password'] = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($details['password']), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
    
    echo "value = \"".$details['password']."\"" ?>>
      <br><center>
      <input class = "btn btn-info btn-lg" type = "submit" name = "edit" value = "Edit" style="background: #73a624; color:#ffffff; padding:5px; border: none;">&nbsp;&nbsp;
	  <a href = "../views/userList.php" > <button class = "btn btn-info btn-lg" type = "button" style="background: #73a624; color:#ffffff; padding:5px; border: none;"> Cancel </button> </a></center><br><br>
    </form>
    </div>
	
	<script src="addDes/js/jquery.min.js"></script>
    <script src="addDes/bootstrap/js/bootstrap.min.js"></script>
	
	
  </body>
</html>
