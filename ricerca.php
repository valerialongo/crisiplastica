 
<?php
   

    session_start();
// SE VOGLIAMO CHE SI POSSA ACCEDERE ALLA HOME SOLO EFFETTUANDO IL LOGIN
 //  if (!isset($_SESSION["email"])) {
    //  header('Location: login.php');
     //exit;
 //}

    if (!isset($_SESSION["carrello"])) {
      $_SESSION["carrello"]="";
    }

   

    if ($_SESSION["carrello"]=="") {
      $carrello=array();
    } else {
      $carrello=explode(" ",trim($_SESSION["carrello"]));
      $carrello=array_unique($carrello);
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
      <script type="text/javascript">
   var immagini=false;
    var aggiungiImmagini=function() {
      immagini=true;
      $("article").each(function(){
        var immagine=$(this).attr("data-src");
        $(this).prepend("<img style='width:30%' display:block' src='images/articoli/"+immagine+"' alt=''/>");
      })
    }
   $(document).ready(function(e) {
    if (immagini==false) {
     aggiungiImmagini();
      }
   });
    </script>
          
      
    
      <style type="text/css">
          #art_shop{width: 20%;}
      </style>
    
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

    
    </nav>
<!-- Fine Barra di navigazione --> 
 
<!-- fascia testo + video -->
      <header id="contenitore" class="container-fluid">
          
            
            <div class="container" id="sottopancia">
                <div class="row">
                    <div class="col" id="testo_sottop" style="border:0px solid blue;">   
                        
                        <!-- da qui -->
  <?php
        
        $connessione = new mysqli("localhost","root","root","prova");
        $query_ricerca = "SELECT * FROM articoli_cp where nome like '%".$_REQUEST["ricerca"]."%' limit 9";
       
  ?>
      <div class="row">
        <div class="cl-lg-12">
       
                
                  <h3>Risultati della ricerca</h3>
               
            
            <?php
              if (!($risultato = $connessione->query($query_ricerca)))
                die("Query sui prodotti fallita!");
              $i=1;
              $n=0;
              while ($riga = $risultato->fetch_array()) {
                    $id=$riga["id"];
                    $categoria=$riga["categoria"];
                    $nome = $riga["nome"];
                    $note_realizzazione=substr($riga["note_realizzazione"],0,100)."...";
                    $prezzo=$riga["prezzo"];
                    $nome_file=$riga["nome_file"];
                    if ($i==1) {
                      echo "<div>";
                    }
                    echo "<div>";
                    echo "<div>";
                    echo "<article data-src='".$nome_file."'>";
                    echo "<p>$nome";
                    echo "<p>$note_realizzazione";
                    echo "<p> $prezzo euro";
                    echo "<br><a href='aggiungicarrello.php?id=".$id."'>Aggiungi al carrello</a>";
                    echo "</p>";
                    echo "</article>";
                    echo "</div>";
                    if ($i==3) {
                      echo "</div>";
                      $i=1;
                    } else {
                      $i++;
                    }
                    $n++;
              }
              if ($n>0 && $i!=1) {
                echo "</div>";
              }
              if ($n==0) {
                echo "<p>Nessun prodotto soddisfa i tuoi criteri di ricerca!</p>";
              }
            ?>
                             
          </div>
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