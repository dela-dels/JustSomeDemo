<?php

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>List template</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        var maxFields   = 100; //maximum number of inputs user can have
        var formWrapper = $(".inputFieldsWrapper");  //grab form/containing div
        var addButton   = $(".addField");  //add button class name

        var counter = 1; //initial text box count
        $(addButton).click(function(e){
          //on click the button add another row of inputs
          e.preventDefault();
          if (counter < maxFields) {
            counter ++;
            $(formWrapper).append('<div class="container"> <input type="text" name="myText[]"/> <input type="text" name="myText[]"/> <a href="#" class="removeField"><img src="images/icon.png"></a></div>')
          }
        });
        $(formWrapper).on("click",".removeField" , function(e){
          //button to remove row
          e.preventDefault();
          $(this).parent('div').remove();
          counter--;
        })
      })
    </script>
  </head>
  <body>
    <div class="inputFieldsWrapper">
      <form class="" action="index.html" method="post">
        <button type="button" name="button" class="addField">Add another row</button>
        <div class="">
          <input type="myText[]" name="" value=""><span>  </span><input type="myText[]" name="" value="">
        </div>
      </form>
    </div>
  </body>
</html>
