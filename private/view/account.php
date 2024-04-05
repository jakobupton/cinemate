<?php
if (!loggedIn() || $_GET["success"] == "login"){ 
    include('private/view/components/login.php');
}else{
    include('private/view/components/modifyaccount.php');
}
?>