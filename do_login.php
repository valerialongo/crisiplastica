<?php
        include 'conn.php';
        error_reporting(E_ALL);
        ini_set( 'display_errors','1');

        session_start();

        $email=$_REQUEST["email"];
        $pwd=$_REQUEST["pwd"];

		

        echo $email."\n";
        echo $pwd."\n";

        //$_SESSION["user"]=$username;
        //header('Location: http://localhost/clashop/index.php');

        $query= "SELECT pwd FROM users where email='$email'";

        if (!($risultato = $connessione->query($query)))
                die("Query sugli utenti fallita!");

          if ($riga = $risultato->fetch_array()) {
                      $pwd1=$riga["pwd"];
                      echo $pwd1."\n";
                      if ($pwd1==$pwd) {
                        echo "OK\n";
                        //session_destroy();
                        //session_start();
                        $_SESSION["email"]=$email;
                        header('Location: index.php?user='.$email);
                        exit;
                      }

                }
                header('Location: login.php');
                exit;
  ?>
