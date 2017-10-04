
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
                         <p>Per acquistare effettua il login o <a href="registrati.php">registrati</a></p>
    <form  method="post" action="login.php"> 
        <div class="form-group">
        <input  type="email"  name="email" placeholder="Email" required>
        <br>
        <input  type="password" name="pwd" placeholder="password" required>
      <br>
      <button class="btn btn-primary my-2 my-sm-0" type="submit" name="sendLogin">Login</button>
        </div>
    </form>
   
             
            
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