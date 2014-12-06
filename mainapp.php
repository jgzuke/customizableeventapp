<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event App</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<html>
 <body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="">Find Me</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <?php
                foreach($db->query("SELECT * FROM $myTableName") as $row)
                {
                  echo "<li><a href=".$row['itemTableShort'].">".$row['itemTableShort']."</a></li>";
                }
                echo "<li><a href=".UserService::createLogoutUrl($_SERVER['REQUEST_URI']).">Logout</a><li>";
               ?>
               <button type="button" style="color: #777" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#deleteListModal">Delete List</button>
               <button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#newListModal">New List</button>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container"></div>
      <h1>MyAppName</h1>
      
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/js-image-slider.js" type="text/javascript"></script>
    <script src="js/myjs.js"></script>
    <?php $db=null; ?>
  </body>
</html>