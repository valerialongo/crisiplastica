      <!DOCTYPE html>
      <html>
      <head>
      <title>CLAShop</title>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <!-- Bootstrap -->

      <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>

      <script src="js/jquery-1.10.1.js"></script>
      <script src="js/bootstrap.js"></script>

          </head>
          <body>

      
<?php
       

        session_start();

      


        $connessione = new mysqli("localhost","root","root","crisiplastica_db");

        $query_ricerca = "SELECT * FROM articoli where nome like '%".$_REQUEST["ricerca"]."%' limit 9";

      
  ?>

     
        <div class="row">
          <div id="colonna1" class="col-xs-12 col-sm-9 colonna">
        <div class="row">
          <div class="col-xs-12 colonna">
                <div class="page-header">
                  <h3>Risultati della ricerca</h3>
                </div>
            </div>
          </div>
            <?php

              if (!($risultato = $connessione->query($query_ricerca)))
                die("Query sui prodotti fallita!");

              $i=1;
              $n=0;
              while ($riga = $risultato->fetch_array()) {
                    $id=$riga["id"];
                    $nome = $riga["nome"];
                    $categoria=$riga["categoria"];
                    $note_realizzazione=substr($riga["note_realizzazione"],0,100)."...";
                    $prezzo=$riga["prezzo"];
                    $immagine=$riga["immagine"];

                    if ($i==1) {
                      echo "<div class='row'>";
                    }

                    echo "<div class='span3'>";
                    echo "<article class='schedavg' data-src='".$immagine."'>";
                    //echo "<a href='dettaglio_prodotto.php?id=$id'><img class='img-thumbnail prodotto' src='images/prodotti/$immagine' alt=''/></a>";
                    echo "<h5><a href='dettaglio_prodotto.php?id=$id'>$nome - $categoria</a></h5>";
                    echo "<p>$note_realizzazione";
                    echo " <span class='badge badge-success'>EUR $prezzo</span>";
                    echo "<a href='aggiungicarrello.php?id=".$id."'><span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span></a>";
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
    
      </body>
      </html>
