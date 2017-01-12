<?php
include "config.php";

if (isset($_POST['submit'])) {
  # code...
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $username = mysqli_real_escape_string($db, $_POST["usermail"]);
    $password = mysqli_real_escape_string($db, $_POST['userpassword']);

    $sqlQuery = "SELECT * FROM users WHERE USERNAME = '$username' AND PASSWORD = '$password'";
    $result   = mysqli_query($db, $sqlQuery);
    $row      = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count    = mysqli_num_rows($result);
    if ($count == 1) {
      # code...
      $_SESSION['userLogin'] = $username;
      header("location:home.php");
    }else{
      echo "Username or password is incorrect";
    }
  }
  mysqli_close($db);
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Login Test</title>
   </head>
   <body>
     <div class="loginForm">
       <form class="" action="loginTest.php" method="POST">
         <label for="">Username :</label>
         <input type="email" name="usermail" value=""><br>
         <label for="">Password :</label>
         <input type="password" name="userpassword" value=""><br>
         <input type="submit" name="submit" value="Login">
       </form>
     </div>

   </body>
 </html>
