<?php
define ('DB_HOST','localhost');
define ('DB_USER','root');
define ('DB_PASSWORD','root');
define ('DB_NAME','prova');

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die ("Si è verificato un errore durante la connesione al database");

?>