<?php
include 'conn.php';
session_start();
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
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
    <meta charset="utf-8">
    </head>
    <body>
         <p style="text-align: right;"> Bentornato <?php echo $name; ?></p>
 <p style="text-align: right;"> Non sei <?php echo $name; ?>?<a href="logout.php"> esci</a></p>
        <p><a href="carrello.php">Carrello</a></p>
        
    </body>
</html>