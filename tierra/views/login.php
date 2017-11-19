<?php
  include "../controllers/signInFunctions.php";
?>

<!DOCTYPE html>
<html id="home">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets2/css/styles.css">
    <link rel="stylesheet" href="assets2/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets2/css/navbar.css">
    <link rel="stylesheet" href="assets2/css/head.css">
    <link rel="stylesheet" href="assets2/css/head-1.css">
    <link rel="stylesheet" href="assets2/css/navbar-1.css">
    <link rel="stylesheet" href="assets2/css/foot.css">
</head>

<body id="home">
    
    <?php
    if(isset($_GET['login_err'])) {
    	$error = $_GET['login_err'];
    	print '<center><b style="color:red;">';
    	echo"$error";
    	print '</b></center><br>';
    }
    ?>

    <?php
    if(isset($_GET['message'])) {
    	$error = $_GET['message'];
    	print '<center><b style="color:green;">';
    	echo"$error";
    	print '</b></center>';
    }
    ?>
    
    <div id="log-in" class="login-card"><img src="../views/assets2/img/avatar_2x.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <form class="form-signin" action "<?php $_PHP_SELF ?>" method = "POST"><span class="reauth-email"> </span>
            <input class="form-control" type="username" required="" placeholder="Username" autofocus="" id="inputUsername" name="username">
            <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password">
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="submit" value="LOGIN">Sign in</button>
        </form><a href="#" class="forgot-password">Forgot your password?</a></div>
    <script src="assets2/js/jquery.min.js"></script>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>