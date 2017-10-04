  <?php
  session_start();

  require_once 'conn.php';
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}

    if (!isset($_SESSION["email"])) {
      header('Location: login.php');
      exit;
    }

  if (!isset($_SESSION["carrello"])) {
    $_SESSION["carrello"]="";
  }


  if ($_SESSION["carrello"]=="") {
    $carrello=array();
  } else {
    $carrello=explode(" ",trim($_SESSION["carrello"]));
    $carrello=array_unique($carrello);
  }

  

  $totale=0;
  if (count($carrello)>0) {
    $carrello_string=implode(",", $carrello);
    $query_carrello="select * from articoli_cp where id in ($carrello_string)";
  }


$sql = "SELECT name FROM users WHERE email = '$email'";
$sel_data = mysqli_query($conn, $sql);
if (!$sel_data){
    die('Si è verificato un errore durante la selezione di alcuni dati dal database');
    
}
else{
    $row = mysqli_fetch_row($sel_data);
    $name = $row[0];   
}

    
?>

<!DOCTYPE html>
<html lang="it">
    
    
  <head>
    <!-- Required meta tags -->
    <title>Crisiplastica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400" rel="stylesheet">
    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/crisiplastica_s.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
      <script src="fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
   $("a.thumb").fancybox();
</script>
    
      <style type="text/css">
          #art_shop{width: 20%;}
      </style>

  <script type="text/javascript">
  $(document).ready(function(e) {

    $("#svuotacarrello").click(function(event) {
      console.log("svuoto il carrello");
      window.location.href="svuotacarrello.php";
    });

  });

  </script>
    
</head>
    
    
    
  <body style="height:100%;">
      
        <script>
            jQuery(document).ready(function ($) {
            $(window).stellar();
            });
        </script>
      
      
<!-- Barra di navigazione -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <img src="Images/logoCrisiplastica.png" height="30" alt="logo-crisiplastica">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
 <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      
  
            <button class="btn btn-outline-success my-2 my-sm-0 search_btn" type="submit"><img src="Images/schifanella/carrello.png" height="25" alt="search_logo" href="carrello.php"(<?php echo count($carrello) ?>)> </button>
      
 <p style="text-align: right;"> Non sei <?php echo $name; ?>?<a href="logout.php"> esci</a></p>
           
        
        </div>
    
    </nav>
<!-- Fine Barra di navigazione --> 
 
<!-- fascia testo + video -->
      <header id="contenitore" class="container-fluid">
          
            
            <div class="container" id="sottopancia">
                <div class="row">
                    <div class="col" id="testo_sottop" style="border:0px solid blue;">   
                        
                        <!-- da qui -->
                        <div class="container">
                         <h1>Carrello</h1>
            </div>
            <?php
            $connessione = new mysqli("localhost","root","root","prova");


            if (count($carrello)>0) {

              $totale=0;
              if (!($risultato = $connessione->query($query_carrello)))
                die("Query su carrello fallita!");

              echo '<table class=" table table-striped" style="font-size:20px;">';
              echo '<thead>';
              echo '<tr>';
              echo '<th> </th>';
              echo '<th>Nome</th>';
              echo '<th>Descrizione</th>';
              echo '<th>Prezzo</th>';
              echo '</tr>';
              echo '</thead>';
              echo '<tbody>';

              $i=1;
              while ($riga = $risultato->fetch_array()) {
                $id = $riga["id"];
                $nome = $riga["nome"];
                $prezzo=$riga["prezzo"];
                $note_realizzazione=$riga["note_realizzazione"];
                $totale=$totale+$prezzo;

                echo "<tr>";
                echo "<td></td>";
                echo "<td>$nome</td>";
                echo "<td>$note_realizzazione</td>";            
                echo "<td>$prezzo euro</td>";
                echo "</tr>";

                $i++;
              }
              echo "</tbody>";
              echo "</table>";
              echo "<div class='container'>";  
              echo "<br><p>Totale: $totale euro</p>";
              echo "<input type='hidden' name='totale' value='".$totale."'/>";
            echo "</div>";
                echo "<div class='container'>";  
              echo "<br><button class='btn btn-primary' type='submit'>Ordina adesso!</button>";
              echo "<br><button class='btn btn-primary' type='button' id='svuotacarrello'>Svuota il carrello</button>";
              echo "</form>";
                echo "</div>";
              
            } else {
              echo "<p>Il tuo carrello &egrave; vuoto!</p>";
            }
            ?>
                    </div>
            
                        
                        <!--a qui -->
                    </div>
                    
                    </div>
                </div>
            
      </header>
<!-- fine fascia testo + video -->
      

     
<!-- footer -->
      
      <footer>
        <div class="container_fluid" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col" id="footer_logo" style="border: 0px solid red">
                        <img id="footer_logo_img" src="Images/logoCrisiplastica.png" alt="logo-crisiplastica">
                        <p style="margin-top:8px; margin-left:0;">by <b>Cristina Accettulli</b></p>
                    </div>
                    <div class="col" id="footer_contatti">
                        <div id="footer_cornice_contatti">
                            <p id="footer_p">phone: <b class="b_left"> +39 347 05 07 768 </b> <br />
                            email: <b class="b_left"> cristinaaccettulli@gmail.com </b> </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="border: 0px solid green">
                        
                    </div>
                    <div class="col" id="footer_social" style="border: 0px solid yellow">
                        <a href="https://www.facebook.com/Crisiplastica/"><img class="footer_social_img" src="Images/facebook.png" alt="link_facebook_page"></a>
                        <a href="https://www.instagram.com/crisiplastica/" style="margin-right:30px; margin-left:30px";><img src="Images/instagram.png" class="footer_social_img" alt="link_instagram_page"></a>
                        <a href="https://www.youtube.com/channel/UCwSWNPoReBodEkhLW95v3vA"><img src="Images/you_tube.png" class="footer_social_img" alt="link_youtube_page"></a>
                    </div>
                </div>
            </div>
        </div>
      </footer>

<!-- fine footer -->
      
      

      
      
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>