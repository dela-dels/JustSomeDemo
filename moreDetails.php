<?php
include("config.php");
//include("signUp.php");
session_start();
$usermail3 = $_SESSION['usermail2'];
if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $mobilenumber = $_POST["mobilenumber"];
    $address = $_POST["address"];

    $userQuery = "UPDATE users SET firstname='$firstname', lastname='$lastname' , mobilenumber='$mobilenumber', address='$address' WHERE username='$usermail3'";
    $result    = mysqli_query($db ,$userQuery);
    //$queryRow  = mysqli_fetch_array($result , MYSQLI_ASSOC);
    //$queryCount = mysqli_num_rows($result);

    if ($result == TRUE){
      header("Location:home.php");
      echo "Insert successful";
    }else{
      echo  "Insert unsuccessful";
      echo $db->error;
    }
    mysqli_close($db);
}
?>

 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
    <title>One More Step | ShopBuddy.com.gh</title>
  </head>
  <body>
    <div class="wrapper">
      <!-- navigation bar -->
   <nav class="navbar-collapse #ff3d00 deep-orange accent-3" id="superNav">
     <div class="nav-wrapper container">
       <a href="index.php" class="brand-logo">ShopBuddy.com.gh</a>
       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li>
           <a href="logOut.php">Log Out<i class="material-icons left">perm_identity</i></a>
         <
       </ul>
     </div>
   </nav>
   <!--end of navbar-->
   <div class="row container center" id="headText">
     <h4>One more thing before you give fill out your order form.</h4>
   </div>
   <div class="container">
     <form class="col s12" action="" method="POST">
         <div class="row">
           <div class="input-field col s8 center">
             <p class="center login-form-text">Personal Information</p>
           </div>
         </div>
         <div class="row margin col s8 center-align">
           <div class="input-field col s4">
           <!--  <i class=" small material-icons">email</i>-->
             <input placeholder="First Name" type="text" class="validate" name="firstname" required>
             <label for="firstname"></label>
           </div>
           <div class="input-field col s4">
           <!--  <i class=" small material-icons">lock</i>-->
             <input placeholder="Last Name" type="text" class="validate" name="lastname" required>
             <label for="lastname"></label>
           </div>
         </div>
         <div class="row margin">

         </div>
         <div class="row margin">
           <div class="input-field col xs6">
             <!--<i class=" small material-icons">lock</i>-->
             <input placeholder="Mobile Number" type="text" class="validate" name="mobilenumber" required>
             <label for="mobilenumber"></label>
           </div>
           <div class="input-field col s6">
             <!--<i class=" small material-icons">lock</i>-->
             <input placeholder="Address" type="text" class="validate" name="address" required>
             <label for="address"></label>
           </div>
         </div>
         <div class="row">
           <div class="input-field col s12 center-align">
             <input name="submit" type="submit" class="btn #ff3d00 deep-orange accent-3" value="Submit">
           </div>
           <!-- <div class="input-field col s12">
             <p class="margin center medium-small sign-up">Already have an account? <a href="login.php">Login</a></p>
           </div> -->
         </div>
     </form>
   </div>
    </div>

  <footer class="page-footer #ff3d00 deep-orange accent-3">
      <div class="container">
        <div class="row">
          <div class="col s6">
            <h5 class="white-text">Contact Us</h5>
            <ul>
              <h6 class="white-text">Email: <b><a class="black-text text-lighten-3" href="#!">info@shopbuddy.com</a></b></h6>
              <h6 class="white-text">Phone: <b><a class="black-text text-lighten-3" href="#!">0800-000-111</a></b></h6>
            </ul>
          </div>
        </div>
        <div class="row center">
          <a href="#"><i class="fa fa-instagram fa-lg black-text" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter fa-lg black-text" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-facebook fa-lg black-text" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-pinterest-square fa-lg black-text" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
         © 2016 Copyright ShopBuddy.com.gh
        <!--<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
        </div>
      </div>
     </footer>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
        <script src="js/pageJs.js" charset="utf-8"></script>
  </body>
</html>
