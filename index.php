<!DOCTYPE html>
  <html>
  <head>
    <title>CRISIPLASTICA</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>


    <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>

    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/bootstrap.js"></script>

    
  </head>
  <body>

    <?php

    
	$connessione = new mysqli("localhost","root","root","crisiplastica_db");


   $query_prodotti = "SELECT * FROM articoli_cp limit 9";


   ?>

   
      <form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
        <div class="input-group">
          <input name="ricerca" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </span>
        </div>
      </form>
   <div><h1>crisiplastica cerca</h1></div>

   

</body>
</html>