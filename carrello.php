
  <?php
  session_start();
include 'conn.php';
  
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
<html>
<head>
  <title>Crisiplastica</title>

  <script src="js/jquery-1.10.1.js"></script>


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


<a href="index.php">Crisiplastica</a>
    <div>
      <button  type="submit"><a href="registrati.php">Registrati</a></button>
      <button  type="submit"><a href="login.php">Login</a></button>
    </div>
    <div>
       <form  role="search" action="ricerca.php" method="post">
          <input name="ricerca" type="text" class="form-control" placeholder="Cerca">
          <button  type="submit">Cerca</button>  
      </form>
    </div>
    <div>
     
         <p style="text-align: right;"> Bentornato <?php echo $name; ?></p>
 <p style="text-align: right;"> Non sei <?php echo $name; ?>?<a href="logout.php"> esci</a></p>
        <p>         
      
    </div>


            <div >
              <h3>Carrello</h3>
            </div>
            <?php
            $connessione = new mysqli("localhost","root","root","prova");


            if (count($carrello)>0) {

              $totale=0;
              if (!($risultato = $connessione->query($query_carrello)))
                die("Query su carrello fallita!");

              echo '<table>';
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
                echo "<td>$i</td>";
                echo "<td>$nome</td>";
                echo "<td>$note_realizzazione</td>";            
                echo "<td>$prezzo euro</td>";
                echo "</tr>";

                $i++;
              }
              echo "</tbody>";
              echo "</table>";
              echo "<p>Totale: $totale euro</p>";
              echo "<input type='hidden' name='totale' value='".$totale."'/>";
              echo "<button class='btn btn-primary' type='submit'>Ordina adesso!</button>";
              echo "<button class='btn' type='button' id='svuotacarrello'>Svuota il carrello</button>";
              echo "</form>";

              
            } else {
              echo "<p>Il tuo carrello &egrave; vuoto!</p>";
            }
            ?>

            
          
      

 
</body>
</html>
