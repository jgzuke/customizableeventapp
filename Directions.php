<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Name</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
    <link href="css/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/All.css" />
    <link type="text/css" rel="stylesheet" href="css/Directions.css" />
</head>
<html>
 <body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id = "myNav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="Overview">Overview</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="Speakers">Speakers</a></li>
            <li><a href="Events">Events</a></li>
            <li class = "active"><a>Directions</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Other</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" id = "mainSection"></div>
      <h1 id = "sectionTitle">Directions</h1>
        <div id="googleMap"></div>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/Bootstrap/bootstrap.All.js"></script>
    <script src="js/Bootstrap/bootstrap.Speakers.js"></script>
    <script src="js/All.js"></script>
    <script src="js/Directions.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
          var mapProp = {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
            mapTypeId:google.maps.MapTypeId.ROADMAP
          };
          var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
  </body>
</html>