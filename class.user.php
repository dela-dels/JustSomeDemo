<?php
include "config.php";

class User{

  public $db;

  public function __construct(){
    $this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if (mysqli_connect_errno()) {
      # code...
      echo "Error: Could Not connect to Database";
      exit;
    }
  }
  public function userLogin($userMail,$userPassword){
    $userPassword = md5($userPassword);
    $loginQuery   = "SELECT * FROM users WHERE username='$userMail' AND password='$userPassword' ";

    //check if username is in the Table
    $result   = mysqli_query($this->db,$loginQuery);
    $userData = mysqli_fetch_array($result);
    $rowCount = $result->num_rows;

    if ($rowCount == 1) {
      # code...
      $_SESSION['login'] = true;
      $_SESSION['uid']   = $userData['uid'];
      return true;
    }else {
      # code...
      return false;
    }

  }

  public function getSession(){
    return $_SESSION['login'];
  }

  public function userLogout(){
    return $_SESSION['login'];
    session_destroy();
  }
}



 ?>
