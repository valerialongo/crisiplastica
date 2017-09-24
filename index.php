<?php require_once 'conn.php'; ?>
<?php
if (isset($_POST['sendReg'])){
    $name = strip_tags($_POST['name']);
    $surname = strip_tags($_POST['surname']);
    $email = strip_tags($_POST['email']);
    $re_email = strip_tags($_POST['re_email']);
    $pwd = strip_tags($_POST['pwd']);
    $r_pwd = strip_tags($_POST['r_pwd']);
    
    include 'check_reg.php';
    $ob = new check_reg($name,$surname,$email,$re_email,$pwd,$r_pwd);
   // $ob->checkEmptyField();
    $ob->badChars();
    $ob->cEmAndPwd();
    $state = $ob->saveDB();
   
}

if (isset($_POST['sendLogin'])){
    $email = strip_tags($_POST['email']);
    $pwd = strip_tags($_POST['pwd']);
    
    include 'check_log.php';
    $ob = new check_login($email, $pwd);
    //$ob->checkempty();
    $ob->check_data();
    $status_login = $ob->check_login();
}
?>

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

    //$_SESSION["carrello"]="7887";

    if ($_SESSION["carrello"]=="") {
      $carrello=array();
    } else {
      $carrello=explode(" ",trim($_SESSION["carrello"]));
      $carrello=array_unique($carrello);
    }


	$connessione = new mysqli("localhost","root","root","prova");


   $query_prodotti = "SELECT * FROM articoli_cp limit 9";

   //$query_commenti ="SELECT * FROM commenti,prodotti where commenti.id_prodotto=prodotti.id order by commenti.id desc limit 4"//

   ?>


    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>

    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/bootstrap.js"></script>

     <link href="css/clashop.css" rel="stylesheet"> 

    <title>Crisi</title> 
   

</head>
<body> 
       <script>


    var aggiungiImmagini=function() {
      immagini=true;
      $("article.schedavg").each(function(){
        var immagine=$(this).attr("data-src");
        $(this).prepend("<img class='img-thumbnail img-responsive prodotto hidden-xs' src='images/prodotti/"+immagine+"' alt=''/>");
      })
    }


  

      if (document.documentElement.clientWidth>=768 && immagini==false) {
        aggiungiImmagini();
      }



    });

    $(window).resize(function(e) {
      if (document.documentElement.clientWidth >= 979 && slider==false) {
        aggiungiSlider();
      }

      if (document.documentElement.clientWidth>=768 && immagini==false) {
        aggiungiImmagini();
      }
    });

    </script>

 
  <a class="navbar-brand" href="#">Crisiplastica</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      </li>
     
     
    </ul>
    
      
      <p><a href="carrello.php">Carrello</a></p>
      <button  type="submit"><a href="registrati.php">Registrati</a></button>
      <button  type="submit"><a href="login.php">Login</a></button>
       <form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
        <div class="input-group">
          <input name="ricerca" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </span>
        </div>
      </form>
  </div>
</nav>   
  
        
    

   
  <body>

    

   <div class="container">
    <div class="row">
      <div class="col-xs-8"> <img class="img-responsive" alt="logo" src="images/global/logo.png"> </div>
      <div class="col-xs-4">
        <p style="text-align: right;">Non sei <?php echo $_SESSION["email"]; ?>?<a href="logout.php"> esci</a></p>
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
        <li class="active"><a href="#">Home</a></li>
              <li><a href="carrello.php">Carrello (<?php echo count($carrello) ?>)</a></li>
              <li><a href="ordini.php">Ordini</a></li>
              <li><a href="contatti.php">Contatti</a></li>
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


   

    <div class="row">
      <div id="colonna1" class="col-xs-12 col-sm-9 colonna">
        <div class="row">
          <div class="col-xs-12 colonna">
            <div class="page-header"><h1>Articoli</h1></div>
          </div>
        </div>

        <?php

        if (!($risultato = $connessione->query($query_prodotti)))
          die("Query sui prodotti fallita!");

        $i=1;
        while ($riga = $risultato->fetch_array()) {
          $id=$riga["id"];
          $nome = $riga["nome"];
          //$produttore=$riga["produttore"];
          $note_realizzazione=substr($riga["note_realizzazione"],0,100)."...";
          $prezzo=$riga["prezzo"];
          $immagine=$riga["immagine"];

          if ($i==1) {
            echo "<div class='row'>";
          }

          echo "<div class='col-xs-4'>";
          echo "<article class='schedavg' data-src='".$immagine."'>";
                //echo "<a href='dettaglio_prodotto.php?id=$id'><img class='img-thumbnail prodotto' src='images/prodotti/$immagine' alt=''/></a>";
          //echo "<h5><a href='dettaglio_prodotto.php?id=$id'>$nome - $note_realizzazione</a></h5>";
          echo "<p>$note_realizzazione";
          echo " <span class='badge badge-success'>EUR $prezzo</span>";
          echo "<a href='aggiungicarrello.php?id=$id'><span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span></a>";
          echo "</p>";
          echo "</article>";
          echo "</div>";

          if ($i==3) {
            echo "</div>";
            $i=1;
          } else {
            $i++;
          }

        }
        if ($i!=1) {
          echo "</div>";
        }

        ?>

      </div>
      
    </div>
    
 </div>
</body>
</html>

    
    


