<?php require_once("header.php");?>
<head>
    <title>Homework 6</title>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <style type="text/css">
        html, body {
        }
    </style>
</head>
<body>
    <iframe width="560" height="315" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="">
</iframe>
    <div id="container"></div>
    <img class="nextpic2" src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/red.png" style="display: block;">
    <img class="nextpic2" src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/green.png" style="display: none;">
    <img class="nextpic2" src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/blue.png" style="display: none;">
    
    <script>
        var myshow = w3.slideshow(".nextpic2", 2000);
        w3.slideshow(".nextpic", 2000);
    </script>


</body>
