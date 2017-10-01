<?php require_once 'conn.php'; ?>
<?php


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

    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Crisiplastica</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tet her/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>    
    

</head>
<body> 

    
    
    
<a href="index.php">Crisiplastica</a>
   <div class="container">
       <p>Per acquistare effettua il login o <a href="registrati.php">registrati</a></p>
    <form  method="post" action="login.php"> 
        <div class="form-group">
        <input  type="email"  name="email" placeholder="Email" required>
        <input  type="password" name="pwd" placeholder="password" required>
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sendLogin">Login</button>
        </div>
    </form>
    </div>
             
            
            <?php
                if (isset($_POST['sendReg']) && $state == 'success'){
                    ?>           
                    <div class="alert alert-success">
                            <strong> La registrazione è stata completata con successo</strong>
            </div>
          
           
               <?php
                }
            if(isset($_POST['sendLogin']) && $status_login == 'wrong_login'){
                ?>
           <div class= "alert alert-warning">
            <strong>Errore:</strong> Le credenziali inserite per il login non sono corrette
            </div>
          <?php
            }
            else if(isset($_POST['sendLogin']) && $status_login == 'login_true'){
                 ?>
            <div class= "alert alert-success">
            <strong>Perfetto!</strong> Puoi effettuare il login <a href="u_index.php" class="alert link">cliccando qui</a>
            </div>
          <?php
            }    
            
           ?> 
               
    
</body>
</html>