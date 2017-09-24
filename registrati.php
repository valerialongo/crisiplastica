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




    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Crisi</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body> 
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tet her/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Crisiplastica</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      </li>
     
     
    </ul>
    
      
      
      
      
      
      
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
  <div class="container">
    <section id="reg">
      <div class="row">
        <div class="cl-lg-12">
          <form method="post" action="registrati.php">
              <p> <h2>Registrati</h2> </p>
            
            <?php
                if (isset($_POST['sendReg']) && $state == 'success'){
                    ?>           
                    <div class="alert alert-success">
                            <strong> La registrazione è stata completata con successo</strong>
            </div>
          
           
              
                
           
            
          <?php
            }    
            
           ?> 
               
                    
                    
                    
                    
                    
                    
              <div class="form-group">
                <div class="form-inline">
                  <input type="text" name="name" class="form-control" placeholder="inserisci il tuo nome" required>
                  <input type="text" name="surname" class="form-control" placeholder="inserisci il tuo cognome" required>
                      </div>
              </div>
               <div class="form-group">
                <div class="form-inline">
                  <input type="email" name="email" class="form-control" placeholder="inserisci la tua email" required>
                  <input type="email" name="re_email" class="form-control" placeholder="conferma la tua email" required>
                      </div>
              </div>
              <div class="form-group">
                <div class="form-inline">
                  <input type="password" name="pwd" class="form-control" placeholder="inserisci una password" required>
                  <input type="password" name="r_pwd" class="form-control" placeholder="conferma la tua password" required>
                      </div>
              </div>
              <input type="submit" name="sendReg" class="btn btn primary" value="Registrati">
             
            
         
            </form>
          </div>
        </div>
            
    
        
        
      </section>
      
    </div>  

    
    
    
</body>
</html>