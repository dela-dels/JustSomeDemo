<?php

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>SingUp | ShopBuddy.com.gh</title>
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
     <style media="screen">
     /* label underline focus color */
       .input-field input[type=email]:focus {
         border-bottom: 1px solid orange;
         box-shadow: 0 1px 0 0 orange;
       }
       /* label underline focus color */
         .input-field input[type=password]:focus {
           border-bottom: 1px solid orange;
           box-shadow: 0 1px 0 0 orange;
         }
     </style>
   </head>
   <body class="#ff3d00 deep-orange accent-3">
      <div class="valign-wrapper" style="width:100%;height:100%;position:absolute;">
        <div id="login-page" class="row">
          <div class="col s12 z-depth-6 card-panel">
            <form class="login-form">
              <div class="row">
                <div class="input-field col s12 center">
                  <p class="center login-form-text">SignUp</p>
                </div>
              </div>
              <div class="row margin">
                <div class="input-field col s12">
                <!--  <i class=" small material-icons">email</i>-->
                  <input placeholder="Enter your email" type="email" class="validate" required>
                  <label for="email"></label>
                </div>
              </div>
              <div class="row margin">
                <div class="input-field col s12">
                <!--  <i class=" small material-icons">lock</i>-->
                  <input placeholder="Enter your password" type="email" class="validate" required>
                  <label for="password"></label>
                </div>
              </div>
              <div class="row margin">
                <div class="input-field col s12">
                  <!--<i class=" small material-icons">lock</i>-->
                  <input placeholder="Re-enter password" id="email" type="email" class="validate" required>
                  <label for="password-again"></label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 center-align">
                  <input type="submit" class="btn #ff3d00 deep-orange accent-3" value="Sign Up">
                </div>
                <div class="input-field col s12">
                  <p class="margin center medium-small sign-up">Already have an account? <a href="login.php">Login</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
   </body>
 </html>
