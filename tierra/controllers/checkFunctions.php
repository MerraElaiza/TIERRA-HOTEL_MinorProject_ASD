<?php

  session_start();
  $username = $_SESSION['username'];

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $userid = $_SESSION['userid'];

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "tierra2";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    $query = "SELECT * FROM admin WHERE userid = $userid";
    $result = $conn->query($query);


    if ($result->num_rows > 0){
      while ($row = $result->fetch_assoc()) {
        $userid = $row['userid'];
      }
    }
    }else{
      header("location: ../views/login.php");

  $conn->close();
  }

?>
