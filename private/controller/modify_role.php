<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/cinemate/private/model/initialize.php");
    if(isset($_POST["customer_id"])){
        $id = $_POST['customer_id'];
        if($_POST["action"] == 'promote'){
            promoteUserByID($id);
        }else if ($_POST["action"] == 'demote'){
            demoteUserByID($id);
        }
    }else{
        echo "Customer ID not set";
    }
?>