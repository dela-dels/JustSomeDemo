<?php

class User{

  private $db;

  function __construct($connection){
    $this->db = $connection;
  }

  //user login functions
  public function userLogin($userMail,$userPassword){
    try {

      $stmt = $this->db->prepare('SELECT * FROM users WHERE  USERNAME = "$userMail" ');
      $stmt->execute(array('USERNAME'=>$userMail));
      $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($stmt->rowCount() > 0) {
        # code...
        if (password_verify($userPassword,$userRow['PASSWORD'])) {
          # code...
          $_SESSION['user_session'] = $userRow['USERNAME'];
          return true;
        }else{
          return false;
        }
      }

    } catch (PDOException $e) {
      echo $e->getMessage();
    }

  }

  public function redirect($url)
   {
       header("Location: $url");
   }

}




 ?>
