<?php
    if(isset($_POST['logout'])){
        include('db.php'); 
        
        session_start();
        unset($_SESSION['id']);
        
        header("Location: index.php");
    }
?>