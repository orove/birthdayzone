<?php

    session_start();
    
    if(isset($_SESSION['session'])){
        
        echo "El email es ".$_SESSION['session'];
        
    }else{
        header('index.html');
    }
