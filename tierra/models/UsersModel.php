<?php

  class UsersModel {
    public $conn;

    function UsersModel(){
      $this->conn = new mysqli ("localhost:3306", "root", "", "tierra2");
    }

    function userExists($username, $password) {
        
     $key = 'qyrdhDT783jsndJUfdgKasas8hsfD6jh';
     $password = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $password, MCRYPT_MODE_CBC, md5(md5($key))));
        
      $query = "SELECT * from admin
        WHERE username = \"".$username."\" AND password = \"".$password."\"";

        $result = mysqli_query($this->conn, $query);

        if ($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            $username = $row['username'];
            $userid = $row['userid'];
            $GLOBALS['_user'] = ($row['firstname'] . $row['lastname']);
            setcookie(loggedin, date("F jS = g:i a"), $seconds);
              session_start();
              $_SESSION['loggedin'] = TRUE;
              $_SESSION['userid'] = $userid;
              $_SESSION['username'] = $username;
              //$_SESSION['user'] = $user;
          }
          $result = TRUE;
        }else{
          $result = FALSE;
        }

      return $result;
    }

    function addUser($data){
        
        $key = 'qyrdhDT783jsndJUfdgKasas8hsfD6jh';
        $data['password'] = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $data['password'], MCRYPT_MODE_CBC, md5(md5($key))));
        
      $query = "INSERT INTO admin (username, firstname, lastname, password)
            VALUES
              (\"".$data['username']."\",
               \"".$data['firstname']."\",
               \"".$data['lastname']."\",
               \"".$data['password']."\");
              ";
      $result = mysqli_query($this->conn, $query);
      return $result;
    }

    function editUser($data, $userid){
        
        $key = 'qyrdhDT783jsndJUfdgKasas8hsfD6jh';
        $data['password'] = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $data['password'], MCRYPT_MODE_CBC, md5(md5($key))));
        
      $query = "UPDATE admin
        SET
          username = \"".$data['username']."\",
          firstname = \"".$data['firstname']."\",
          lastname = \"".$data['lastname']."\",
          password = \"".$data['password']."\"
        WHERE userid = $userid";

      $result = mysqli_query($this->conn, $query);
      return $result;
    }

    function show(){
      $query = "SELECT * FROM admin";
      $result = mysqli_query($this->conn, $query);
      return $result;
    }

    function showUser($userid){
      $query = "SELECT * FROM admin WHERE userid = $userid";
      $result = mysqli_query($this->conn, $query);
      return $result;
    }

    function deleteUser($userid){
      $query = "DELETE FROM admin WHERE userid = $userid";
      $result = mysqli_query($this->conn, $query);
    }

    function getID($username){
      $query = "SELECT userid FROM admin WHERE username = \"".$username."\"";
      $result = mysqli_query($this->conn, $query);
      return $result;
    }

  }
 ?>
