<?php


?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Open+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

      <!--Import Animate.css-->
      <link rel="stylesheet" href="materialize/css/animate.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <!--Import FontAwesome.css-->
      <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

      <!-- site stylesheet-->
      <link rel="stylesheet" href="materialize/css/stylesheet.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Home | ShopBuddy.com.gh</title>
  </head>
<body>
   <!-- navigation bar -->
    <nav class="navbar-collapse #ff3d00 deep-orange accent-3" id="superNav">
      <div class="nav-wrapper container">
        <a href="#" class="brand-logo">ShopBuddy.com.gh</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>
            <a href="login.php">Log In<i class="material-icons left">perm_identity</i></a>
          </li>
          <!--<li><a href="">Login</a></li>-->
        </ul>
      </div>
    </nav>
    <!--end of navbar-->

    <!--Parallax effect -->
    <div class=" row container center-align" id="headtext">
      <h3 class="animated bounceInRight">Welcome to ShopBuddy</h3>
      <hr class="animated fadeInRight">
      <h5 class="animated bounceInLeft">Your shopping made easy</h5>
    </div>
   <div class="parallax-container">
    <div class="parallax"><img id="parallaxImageOne" src="images/resized_2.jpg"></div>
   </div>
   <div class="row container">
    <div class="center-align">
      <a class="waves-effect #ff3d00 deep-orange accent-3 waves-red btn-large" href="#">Sign Up</a>
    </div>
   </div>
   <div id="headerText" class="row container">
    <h3 class="center-align">How To Create Your List.</h3>
    <hr>
   </div>
   <div class="row container">
    <div class="row">
      <div class="col s6">
        <i class=" medium material-icons">supervisor_account</i>
        <div>
          Before You Can Create a shopping list your must first Create an account with us, thus if its your first time using
          our platform. If you have an account already, you can just go ahead and log in with your credentials.
        </div>
      </div>
      <div class="col s6">
        <i class=" medium material-icons center">list</i>
        <div>
          After A successful account creation or log in, you will be provided with an embedded text editor.
          This editor will allow you to create your shopping list easily within a short time.
          Choose your preferred shopping center/supermarket and submit.
        </div>
      </div>
    </div>
   </div>
   <div id="headerText" class="row container">
    <h3 class="center-align">How It Works.</h3>
    <hr>
   </div>
   <div class="row container">
      <div class="row">
        <div class="col s6">
          <i class=" medium material-icons center">shopping_basket</i>
          <div>
            Upon receival of customers' shopping list, we dispatch our respondants/agents to the prefered shoping centers/supermarkets
            to carry out the shopping on your behalf strictly based on the list sent to us.
          </div>
        </div>
        <div class="col s6">
          <i class="medium material-icons">directions_bus</i></i>
          <div>
            After our agents are done with the shopping, we take care of your delivery as well (based on your preferred point eg: office or home).
            NB: There is cost for delivery aside cost for undergoing shopping on your behalf.
          </div>
        </div>
      </div>
   </div>
   <div class="parallax-container">
    <div class="parallax"><img  id="parallaxImageTwo" src="images/resized_2.jpg"></div>
   </div>
   <footer class="page-footer #ff3d00 deep-orange accent-3">
    <div class="container">
      <div class="row">
      <!--  <div class="col s4">
          <h5 class="white-text">Footer Content</h5>
          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        </div>-->
        <div class="col s6">
          <h5 class="white-text">Contact Us</h5>
          <ul>
            <h6 class="white-text">Email: <b><a class="black-text text-lighten-3" href="#!">info@shopbuddy.com</a></b></h6>
            <h6 class="white-text">Phone: <b><a class="black-text text-lighten-3" href="#!">0800-000-111</a></b></h6>
          </ul>
        </div>
      </div>
      <div class="row center">
        <a href="#"><i class="fa fa-instagram black-text" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter black-text" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook black-text" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-pinterest-square black-text" aria-hidden="true"></i></a>
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
