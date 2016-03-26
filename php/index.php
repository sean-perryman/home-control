<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Home Control</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Projector</h2>
          <button class="btn btn-lg" href="#" onclick="projectorPowerOn()">Power On</button>
          <button class="btn btn-lg" href="#" onclick="projectorPowerOff()">Power Off</button>
        </div>

        <div class="col-md-4">
          <h2>Apple TV</h2>
          <button class="btn btn-lg" href="#" role="button">Up</button>
          <button class="btn btn-lg" href="#" role="button">Down</button>
          <button class="btn btn-lg" href="#" role="button">Left</button>
          <button class="btn btn-lg" href="#" role="button">Right</button>
          <button class="btn btn-lg" href="#" role="button">Center</button>
          <button class="btn btn-lg" href="#" role="button">Center</button>
          <button class="btn btn-lg" href="#" role="button">Play/Pause</button>
        </div>

        <div class="col-md-4">
          <h2>Receiver</h2>
          <button class="btn btn-lg" href="#" role="button">Power</button>
          <button class="btn btn-lg" href="#" role="button">Volume Up</button>
          <button class="btn btn-lg" href="#" role="button">Volume Down</button>
          <button class="btn btn-lg" href="#" role="button">Apple TV</button>
          <button class="btn btn-lg" href="#" role="button">XBox One</button>
          <button class="btn btn-lg" href="#" role="button">Center</button>
          <button class="btn btn-lg" href="#" role="button">Play/Pause</button>
        </div>
      </div>

    </div> <!-- /container -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <script>
          function projectorPowerOn() {
            /*var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (xhttp.readyState == 4 && xhttp.status == 200) {
               document.getElementById("demo").innerHTML = xhttp.responseText;
              }
            };
            xhttp.open("GET", "projectorPowerOn.php", true);
            xhttp.send();*/
            <?php sendCommand( '10.92.41.200', '8899', '\r*pow=on#\r' ); ?>
          }
          function projectorPowerOff() {
            /*var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (xhttp.readyState == 4 && xhttp.status == 200) {
               document.getElementById("demo").innerHTML = xhttp.responseText;
              }
            };
            xhttp.open("GET", "projectorPowerOff.php", true);
            xhttp.send();*/
            <?php sendCommand( '10.92.41.200', '8899', '\r*pow=off#\r' ); ?>
          }
          function receiverPower() {}
        </script>

    </body>
</html>
<?php
  function sendCommand( $ip, $port, $cmd ) {
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
  	$connection = socket_connect($socket, $ip, $port);
    if (!$connection) echo "<script>alert('Unable to connect to server.')</script>";
    socket_send($socket, $cmd, strlen($cmd), 0);
  }

 ?>
