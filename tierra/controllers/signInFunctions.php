<?php
  include "../models/UsersModel.php";

  $username = isset($_REQUEST['username'])?$_REQUEST['username']:NULL;
  $password = isset($_REQUEST['password'])?$_REQUEST['password']:NULL;

  $user = new UsersModel();

  if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == "LOGIN") {
        
    $result = $user->userExists($username, $password);

    if ($result){
      header("location: ../views/userList.php");
    }else{
      header("location:../views/login.php");
  }

}

  mysqli_close($user->conn);
 ?>
