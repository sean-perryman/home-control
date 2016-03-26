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
      <div id="status"></div>
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
          <button class="btn btn-lg" href="#" onclick="appleTVUP()">Up</button>
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

        <script>
          function projectorPowerOn() {
            sendAJAXCommand( "projectorPowerOn.php" );
          }
          function projectorPowerOff() {
            sendAJAXCommand( "projectorPowerOff.php" );
          }
          function receiverPower() {
            sendAJAXCommand( "receiverPower.php" );
          }
          function appleTVUP() {
            sendAJAXCommand( "atv_up.php" );
          }

          function sendAJAXCommand( $cmd ) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (xhttp.readyState == 4 && xhttp.status == 200) {
               document.getElementById("status").innerHTML = xhttp.responseText;
              }
            };
            xhttp.open("GET", $cmd, true);
            xhttp.send();
          }
        </script>

    </body>
</html>
