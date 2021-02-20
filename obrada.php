<?php 
    if(!isset($_GET['nadimak'])){
        die('Niste uneli nista.');
    }

    $nadimak = $_GET['nadimak'];
    echo "Zdravo ".$nadimak;
?>