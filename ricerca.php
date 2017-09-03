       <!DOCTYPE html>
      <html>
      <head>
      <title>CRISIPLASRICA</title>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
      <script src="js/jquery-1.10.1.js"></script>
      <script src="js/bootstrap.js"></script> 

      <script>
   var immagini=false;

    var aggiungiImmagini=function() {
      immagini=true;
      $("articolo").each(function(){
        var immagine=$(this).attr("data-src");
        $(this).prepend("<img class='img-responsive hidden-xs' src='images/articoli/"+immagine+"' alt=''/>");
      })
    }


   $(document).ready(function(e) {
    if (immagini==false) {
     aggiungiImmagini();
      }
   });
    </script>
          
          <style> 
              img {
        width: 30%;
        display: block;
        
      }
             
        </style>
      </head>
      <body>

<?php
        
        $connessione = new mysqli("localhost","root","root","crisiplastica_db");

        $query_ricerca = "SELECT * FROM articoli_cp where nome like '%".$_REQUEST["ricerca"]."%' limit 9";

       
  ?>
  <div class="row">
          <div class="col-xs-12 col-sm-9">
      
      <form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
        <div class="input-group">
          <input name="ricerca" type="text" class="form-control" placeholder="Cerca">
          <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </span>
        </div>
      </form>
  

      
       <div class="container">
                <div class="page-header">
                  <h3>Risultati della ricerca</h3>
                </div>
            
            <?php

              if (!($risultato = $connessione->query($query_ricerca)))
                die("Query sui prodotti fallita!");

              $i=1;
              $n=0;
              while ($riga = $risultato->fetch_array()) {
                    $idarticoli_cp=$riga["idarticoli_cp"];
                    $categoria=$riga["categoria"];
                    $nome = $riga["nome"];
                    $note_realizzazione=substr($riga["note_realizzazione"],0,100)."...";
                    $prezzo=$riga["prezzo"];
                    $immagine=$riga["immagine"];

                    if ($i==1) {
                      echo "<div class='row'>";
                    }

                    echo "<div class='row'>";
                    echo "<div class='container'>";
                    echo "<articolo data-src='".$immagine."'>";
                    //echo "<a href='dettaglio_prodotto.php?id=$id'><img class='img-thumbnail prodotto' src='images/prodotti/$immagine' alt=''/></a>";
                    //echo "<h5><a href='dettaglio_prodotto.php?id=$id'>$nome - $produttore</a></h5>";7
                    echo "<p>$nome";
                    echo "<p>$note_realizzazione";
                    echo "<p> $prezzo</span>";
                    echo "<a href='aggiungicarrello.php?id=".$id."'><span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span></a>";
                    echo "</p>";
                    echo "</articolo>";
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
        </div>
       

      </body>
      </html>
