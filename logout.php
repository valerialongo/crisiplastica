<?php
        //error_reporting(E_ALL);
        //ini_set( 'display_errors','1');        

        session_destroy();

        session_start();

        
        header('Location: index.php');
        exit;
  ?>