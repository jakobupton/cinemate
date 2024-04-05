<?php
    function loggedIn(){
        return !empty($_SESSION["user"]);
    }
?>