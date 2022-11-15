<?php require_once("header.php"); ?>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <h4 style="text-align:center; color:white;" id="hidden">This is the second library. This text was hidden until you hovered over it, but it will soon disappear forever.</h4>
  <script>
    $(document).ready(function(){
      $("#hidden").hover(function(){
      $(this).css("color","black");
        },
    function(){
      $(this).hide();
      }
    }
  </script>
</body>
<h4>Library 2</h4>
