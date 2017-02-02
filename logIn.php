<?php
include("config.php");
include("vendor/password.php");

session_start();

if (isset($_SESSION['username'])) {
  # code...
  header("location:home.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = mysqli_real_escape_string($db , $_POST['umail']);

  $userQuery = "SELECT username, password FROM users WHERE username = '$username'";
  $result    = mysqli_query($db, $userQuery);
  $queryRow  = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $queryCount = mysqli_num_rows($result);



  $verifyPassword = password_verify($_POST['upassword'], $queryRow['password']);

  if ($verifyPassword){
    $_SESSION['username'] = $username;
    header("Location:home.php");
  }else{
    echo  "Username Or Password is invalid";
  }
  mysqli_close($db);
}
?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
     <meta http-equiv="pragma" content="no-cache">
     <meta http-equiv="expires" content="0">
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Open+Sans" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
     <!--Import FontAwesome.css-->
     <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

     <!-- site stylesheet-->
     <link rel="stylesheet" href="materialize/css/login.css">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>Log In | ShopBuddy.com.gh</title>
   </head>
   <body class="#ff3d00 deep-orange accent-3">
         <div class="valign-wrapper" style="width:100%;height:100%;position: absolute;">
            <div class="valign" style="width:100%;">
                <div class="container">
                   <div class="row">
                      <div class="col s12 m6 offset-m3">
                         <div class="card">
                            <div class="card-content">
                               <span class="card-title black-text center-align">Sign In</span>
                               <form method="POST" action="logIn.php" name="login">
                                  <div class="row">
                                     <div class="input-field col s12">
                                        <input placeholder="Enter your email" id="email" type="email" class="validate" name="umail" required>
                                        <label for="email" class="active" data-error="wrong" data-success="right"></label>
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="input-field col s12">
                                        <input placeholder="Enter your password" id="password" type="password" class="validate" name="upassword" required>
                                        <label for="password" class="active" data-error="wrong" data-success="right"></label>
                                     </div>
                                  </div>
                                  <div class="card-action center-align">
                                     <input type="submit" class="btn #ff3d00 deep-orange accent-3" name="Signin" value="LOG IN">
                                  </div>
                               </form>
                            </div>
                            <div class="card-action center-align">
                              <a href="index.php">Click Here TO Go back</a>
                            </div>
                         </div>
                      </div>
                   </div>
            </div>
          </div>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script src="js/pageJs.js" charset="utf-8"></script>
   </body>
 </html>
