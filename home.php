<?php
include("auth.php");

if (isset($_POST['sendList'])) {
  # code...
  foreach ($_POST as $key => $value) {
    # code...
    if ($key == 'itemName' && $key == 'itemQuantity') {
      # code...
      print_r($value);
    }
  }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create List | ShopBuddy.com.gh</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

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
            <link rel="stylesheet" href="materialize/css/home.css">

      <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

     <script type="text/javascript">
     $(document).ready(function(){
       $('select').material_select();
       var maxField  = 100;
       var wrapper   = $(".listWrapper");
       var addButton = $(".addField");

       var counter   =  1;
       $(addButton).click(function(e){
         e.preventDefault();
         if (counter < maxField) {
           counter ++;
           $(wrapper).append('<tr> <td><div class="input-field col s6"> <input type="text" class="validate" name="itemName[]"></div></td> <td><div class="input-field col s6"><input  type="text" class="validate" name="itemQuantity[]"></div></td></tr>')
         }
       });
     })

     </script>

  </head>
<body>
  <div class="wrapper">
    <!-- navigation bar -->
 <nav class="navbar-collapse #ff3d00 deep-orange accent-3" id="superNav">
   <div class="nav-wrapper container">
     <a href="index.php" class="brand-logo">ShopBuddy</a>
     <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
     <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li>
         <a href="logOut.php">Log Out<i class="material-icons left">perm_identity</i></a>
       </li>
     </ul>
     <ul class="side-nav" id="mobile-demo">
       <li><a href="LogOut.php">Log Out<i class="material-icons left">perm_identity</i></a></li>
     </ul>
   </div>
 </nav>
 <!--end of navbar-->
 <div class="row container center" id="headText">
   <h4>Use the form below to create your shopping list</h4>
 </div>
 <div class="container">
   <form class="col s12" action="" method="POST">
     <div class="center-align">
       <button type="button" name="button" class="waves-effect #ff3d00 deep-orange accent-3 waves-red btn-large addField">Add a new row</button>
     </div>
     <table>
          <thead>
            <tr>
                <th class="center-align" data-field="name">Item Name</th>
                <th class="center-align" data-field="price">Item Quantity</th>
            </tr>
          </thead>
          <tbody class="listWrapper">
            <tr>
              <td>
                <div class="input-field col s6">
                  <input type="text" class="validate" name="itemName[]">
                </div>
              </td>
              <td>
                <div class="input-field col s6">
                  <input  type="text" class="validate" name="itemQuantity[]">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="input-field col s6">
                  <input type="text" class="validate" name="itemName[]">
                </div>
              </td>
              <td>
                <div class="input-field col s6">
                  <input  type="text" class="validate" name="itemQuantity[]">
                </div>
              </td>
            </tr>
          </tbody>
      </table>
      <div class="center-btn">
        <div class="input-field col s12">
          <select class="" name="shopCenters" multiple>
            <option value="" disabled select>Select Your Preferred Shopping Center</option>
            <option value="Shoprite">Shoprite Accra Mall</option>
            <option value="MaxMart">MaxMart Osu</option>
            <option value="Marina">Marina Mall</option>
            <label for="">Shopping Center</label>
          </select>
        </div>
        <input type="submit" class="btn #ff3d00 deep-orange accent-3 center-align" name="sendList" value="SEND">
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
      </div>
    </div>
  </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script src="js/pageJs.js" charset="utf-8"></script>
</body>
</html>
