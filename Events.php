<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Name</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
    <link href="css/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/All.css" />
    <link type="text/css" rel="stylesheet" href="css/Events.css" />
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
            <li class = "active"><a>Events</a></li>
            <li><a href="Directions">Directions</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Other</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" id = "mainSection"></div>
      <div id = "sectionBody">
        <?php
          $speakersFile = file_get_contents('resources/events.txt');
          $speakers  = preg_split("#\n\s*\ns*\n#Uis", $speakersFile);
          foreach ($speakers as $value)
          {
            $information  = preg_split("#\n\s*\n#Uis", $value);
            echo "
            <h1 class = 'eventNames'>$information[0]</h1>
            <div class='eventDiv' class='container'>
              <p class = 'eventDescription'>$information[1]</p>
            </div>
            <div class='eventTimeDiv' class='container'>
              <h5 style='float: left;'>$information[2]</h5>
              <form method='get' action='resources/".preg_replace('/\s+/', '', $information[0]).".ics'>
                <button class='btn btn-primary' style='float: right;' type='submit'>Add to Calendar</button>
              </form>
            </div>";
            if (!($value === end($speakers)))
              echo "<HR class='mydividers'></HR>";
          }
        ?>
      </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/Bootstrap/bootstrap.All.js"></script>
    <script src="js/Bootstrap/bootstrap.Speakers.js"></script>
    <script src="js/All.js"></script>
    <script src="js/Events.js"></script>
  </body>
</html>