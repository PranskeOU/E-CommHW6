<?php require_once("header.php"); ?>
<head><style type="text/css">.anychart-credits{position:absolute;overflow:hidden;right:9px;bottom:6px;height:10px;}.anychart-credits a {text-decoration:none;}.anychart-credits-logo{border:none;margin-right:2px;height:10px;width:10px;display:inline-block;vertical-align:top;}.anychart-credits-text{font-size:10px;line-height:9px;display:inline-block;vertical-align:top;text-decoration:none;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;color:#929292;height:10px;}</style>
    <title>Homework 6</title>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-tag-cloud.min.js"></script>
</head>
<body>
  <link rel="stylesheet" href="./style.css">
    <style>
  html, body, #container {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
        }
    </style>
        <div id="container">
            <header class="info">
    <script>
    // List of words
   anychart.onDocumentReady(function() {
        var data = [
    {"x": "Programming", "value": 265000000, category:"light blue"},
    {"x": "Data Warehousing", "value": 220000000, category: "Dark blue"},
    {"x": "Labor Problems", "value": 998000000, category: "Orange"},
    {"x": "E-Commerce", "value": 450000000, category: "Yellow"}
     ];
        var chart = anychart.tagCloud(data);
       chart.title("Nick's classes ranked by favorability")
        chart.angles([0])
        chart.colorRange(true);
        chart.colorRange().length('80%');
        chart.container("container");
        chart.draw();
   });
    </script>


</header><svg width="0" height="0" style="position: absolute; left: -99999px; top: -99999px;">
    <text font-style="normal" font-variant="normal" font-family="Verdana, Helvetica, Arial, sans-serif" font-size="12" font-weight="normal" letter-spacing="normal" text-decoration="none">Percent of total: 51.6%</text>
    <defs></defs><g></g><g></g></svg></body>
