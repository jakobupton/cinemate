<?php
if (loggedIn()){
    include('private/view/components/modifyaccount.php');
}else{
    include('private/view/components/login.php');
}
?>