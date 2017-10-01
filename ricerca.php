 
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
      <html>
      <head>
      <title>Crisiplastica</title>
     
      
      <script src="js/jquery-1.10.1.js"></script>
      
      <script>
   var immagini=false;
    var aggiungiImmagini=function() {
      immagini=true;
      $("article").each(function(){
        var immagine=$(this).attr("data-src");
        $(this).prepend("<img src='images/articoli/"+immagine+"' alt=''/>");
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
        
        $connessione = new mysqli("localhost","root","root","prova");
        $query_ricerca = "SELECT * FROM articoli_cp where nome like '%".$_REQUEST["ricerca"]."%' limit 9";
       
  ?>
  <a href="index.php">Crisiplastica</a>
    <div>
      <button  type="submit"><a href="registrati.php">Registrati</a></button>
      <button  type="submit"><a href="login.php">Login</a></button>
    </div>
    <div>
       <form  role="search" action="ricerca.php" method="post">
          <input name="ricerca" type="text"  placeholder="Cerca">
          <button  type="submit">Cerca</button>  
      </form>
    </div>

   <div>
    <p style="text-align: right;">Non sei <?php echo $_SESSION["email"]; ?>?<a href="logout.php"> esci</a></p>
      </div>
  
    <div>
      
       
   <a href="carrello.php">Carrello (<?php echo count($carrello) ?>)</a> 
      
    </div>
          

      
       <div>
                
                  <h3>Risultati della ricerca</h3>
                </div>
            
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
           
          
   

      </body>
      </html>