<?php
    session_start(); 
        
    if(isset($_SESSION["email"])){
        echo $_SESSION["email"];
    }
    else{
        header("Location: index.html");
    }
    
   
?>

