<?php

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
                               <form method="POST" action="">
                                  <div class="row">
                                     <div class="input-field col s12">
                                       <i class=" small material-icons">email</i>
                                        <input placeholder="Enter your email" id="email" type="email" class="validate" required>
                                        <label for="email" class="active" data-error="wrong" data-success="right"></label>
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="input-field col s12">
                                       <i class=" small material-icons">input</i>
                                        <input placeholder="Enter your password" id="password" type="password" class="validate">
                                        <label for="password" class="active" data-error="wrong" data-success="right"></label>
                                     </div>
                                  </div>
                               </form>
                            </div>
                            <div class="card-action center-align">
                               <input type="submit" class="btn #ff3d00 deep-orange accent-3" value="Sign In">
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
