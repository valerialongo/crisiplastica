<?php
include 'conn.php';
session_start();
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}
if (!isset($_SESSION["email"])) {
     header('Location: login.php');
     exit;
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
    <meta charset="utf-8">
        <meta charset="utf-8">
  
    <title>Crisiplastica</title> 
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
   $("a.thumb").fancybox();
</script>

<style type="text/css">
.gallery img {
    width: 20%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}
</style>
    

</head>
<body> 
     

   
         <p style="text-align: right;"> Bentornato <?php echo $name; ?></p>
 <p style="text-align: right;"> Non sei <?php echo $name; ?>?<a href="logout.php"> esci</a></p>
        <p>
 
  <a href="index.php">Crisiplastica</a>

      
       <form  role="search" action="ricerca.php" method="post">
          <input name="ricerca" type="text"  placeholder="Cerca">
          <button  type="submit">cerca</button>  
      </form>
      
       
   <a href="carrello.php">Carrello (<?php echo count($carrello) ?>)</a> 
      
    
    <div class="container">
	
    <div class="gallery">
        <?php
      
         include('dbConfig.php');
       
                  // ho provato a fare diverse gallerie per tutte le sezioni della home
                  //MA: punto primo si caricano lentissimamente
                  //punto secondo sbaglio qualcosa nelle funzioni e le cose risultano a cazzo di cane
                  //        QUINDI: ci inventiamo una galleria shop, come se fosse una categoria dei vari prodotti, e questa è l'unica che apre le immagini qua sotto, collegate al carrello
        $query = $db->query("SELECT * FROM articoli_cp WHERE vendita='acquistabile'");
        
        if($query->num_rows > 0){
            while($row1 = $query->fetch_assoc()){
                
                $imageURL = 'images/anatomia/'.$row1["nome_file"];
                $note_realizzazione=substr($row1["note_realizzazione"],0,100)."...";
                $prezzo=$row1["prezzo"];
                $id=$row1["id"];
                
        ?>
            <a class="thumb" rel="gallery0" href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row1["nome"],  
            "<br>$note_realizzazione<br>",
            $row1["prezzo"],
                "euro",
            "<a href='aggiungicarrello.php?id=$id'><br>aggiungi al carrello</a>";
               
               ?>" >
                <?php }
          }               
                ?>
               <img src="images/arredo/corniceocchio.jpg" alt="" />
                    
        </a>
            
        </div>
    </div>



   

   
</body>
</html>

    </body>
</html>