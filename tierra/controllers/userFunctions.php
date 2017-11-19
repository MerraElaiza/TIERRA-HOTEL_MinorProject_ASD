<?php
  include "../models/UsersModel.php";

  $user = new UsersModel();
  //adding admin
  if (isset($_POST['submit']) && $_POST['submit'] == "Submit"){
    $result = $user->addUser($_POST);
    header("location: userList.php");
  }



  if (isset($_GET['edit'])){
    if (isset($_GET['userid'])){
      $details = $user->showUser($_GET['userid']);
      $details = $details->fetch_assoc();
    }
  }

  if (isset($_POST['edit'])){
    if ($_POST['edit'] == "Edit"){
      $user->editUser($_POST, $_GET['userid']);
      header("location: ../views/userList.php");
    }
  }

  if (isset($_GET['delete']) && isset($_GET['userid'])){
    if ($_GET['delete']){
      $user->deleteUser($_GET['userid']);
      header("location: userList.php");
    }
  }
/*
  if (isset($_GET['username'])){
    $getID = $user->getID($_GET['username']);
    $details = $user->showUser($getID);
    $details = $details->fetch_assoc();
  }
  */
 ?>
