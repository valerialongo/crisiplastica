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
   $query_prodotti = "SELECT * FROM articoli_cp limit 9";
?>




    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Crisi</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body> 

  <a class="navbar-brand" href="#">Crisiplastica</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      </li>
     
     
    </ul>
    <form class="form my-2 my-lg-0" method="post" action="index.php"> 
        <input class="form-control mr-sm-2" type="email"  name="email" placeholder="Email" required>
        <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="pwd" required>
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sendLogin">Login</button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="registrati.php">Registrati</a></button>
    </form>
      
      
      
      
      
      
      <form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
        <div class="input-group">
          <input name="ricerca" type="text" class="form-control" placeholder="Cerca">
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
      
          
           
               <?php
                
            if(isset($_POST['sendLogin']) && $status_login == 'wrong_login'){
                ?>
           <p><div class= "alert alert-warning">
            <strong>Errore:</strong> Le credenziali inserite per il login non sono corrette
            </div></p>
          <?php
            }
            else if(isset($_POST['sendLogin']) && $status_login == 'login_true'){
                 ?>
            <p><div class= "alert alert-success">
            <strong>Perfetto!</strong> Puoi effettuare il login <a href="u_area.php" class="alert link">cliccando qui</a>
            </div></p>
          <?php
            }    
            
           ?> 
               
                    
                    
                    
                    
                    
                    
        
          </div>
        </div>
            
    
        
        
      </section>
      
    </div>  

    
    
    
</body>
</html>