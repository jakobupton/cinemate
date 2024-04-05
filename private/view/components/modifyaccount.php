<?php 
    foreach ($_SESSION["user"] as $key => $value){
        echo $key . ":" . $value . "<br>"; 
    }
?>