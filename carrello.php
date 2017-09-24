<!DOCTYPE html>
<html>
<head>
  <title>CLAShop</title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <!-- Bootstrap -->



  <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>

  <script src="js/jquery-1.10.1.js"></script>
  <script src="js/bootstrap.js"></script>

  <link href="css/clashop.css" rel="stylesheet">

  <script>
  $(document).ready(function(e) {

    $("#svuotacarrello").click(function(event) {
      console.log("svuoto il carrello");
      window.location.href="svuotacarrello.php";
    });

  });

  </script>
</head>
<body>

  <?php
  //error_reporting(E_ALL);
  //ini_set( 'display_errors','1');

  session_start();

  if (!isset($_SESSION["email"])) {
   header('Location: login.php');
 exit;
  }

  if (!isset($_SESSION["carrello"])) {
    $_SESSION["carrello"]="";
  }

//$_SESSION["carrello"]="18";

  if ($_SESSION["carrello"]=="") {
    $carrello=array();
  } else {
    $carrello=explode(" ",trim($_SESSION["carrello"]));
    $carrello=array_unique($carrello);
  }

  $connessione = new mysqli("localhost","root","root","prova");


  $totale=0;
  if (count($carrello)>0) {
    $carrello_string=implode(",", $carrello);
    $query_carrello="select * from articoli_cp where id in ($carrello_string)";
  }

 // $query_commenti ="SELECT * FROM commenti,prodotti where commenti.id_prodotto=prodotti.id order by commenti.id desc limit 6";//
  ?>

  <div class="container">
    <div class="row">
      <div class="col-xs-8"> <img class="img-responsive" alt="logo" src="images/global/logo.png"> </div>
      <div class="col-xs-4">
        
      </div>
    </div>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
              <li class="active"><a href="carrello.php">Carrello (<?php echo count($carrello) ?>)</a></li>
              <li><a href="ordini.php">Ordini</a></li>
              
      </ul>
      <form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
        <div class="input-group">
          <input name="ricerca" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </span>
        </div>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="row">
      <div id="colonna1" class="col-xs-12 col-sm-9 colonna">
        <div class="row">
          <div class="col-xs-12 colonna">
            <div class="page-header">
              <h3>Il tuo carrello</h3>
            </div>
            <?php

            if (count($carrello)>0) {

              $totale=0;
              if (!($risultato = $connessione->query($query_carrello)))
                die("Query su carrello fallita!");

              echo '<table class="table table-striped">';
              echo '<thead>';
              echo '<tr>';
              echo '<th>#</th>';
              echo '<th>Nome</th>';
              echo '<th>Prezzo</th>';
              echo '</tr>';
              echo '</thead>';
              echo '<tbody>';

              $i=1;
              while ($riga = $risultato->fetch_array()) {
                $id = $riga["id"];
                $nome = $riga["nome"];
                $prezzo=$riga["prezzo"];

                $totale=$totale+$prezzo;

                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td><a href='note_realizzazione.php?id=$id'>$nome</a></td>";
                echo "<td>$prezzo</td>";
                echo "</tr>";

                $i++;
              }
              echo "</tbody>";
              echo "</table>";
              echo "<p>Totale: $totale EUR</p>";
              echo "<form action='aggiungiordine.php' method='post'>";
              echo "<input type='hidden' name='totale' value='".$totale."'/>";
              echo "<button class='btn btn-primary' type='submit'>Ordina adesso!</button>";
              echo "<button class='btn' type='button' id='svuotacarrello'>Svuota il carrello</button>";
              echo "</form>";

              echo "<p>Informativa sul regolamento di vendita <a href='#myModal' role='button' class='btn' data-toggle='modal'>link</a></p>";

            } else {
              echo "<p>Il tuo carrello &egrave; vuoto!</p>";
            }
            ?>

            
          </div>
        </div>
      </div>
     
    </div>
    <div class="row">
      
    </div>
  </div>
</body>
</html>
