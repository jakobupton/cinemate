<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/cinemate/private/model/initialize.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $result = verifyUser($_POST["email"], $_POST["password"]); //returns array of user info
        if ($result) { // If the user is found
            session_start();
            $_SESSION["user"] = $result;
            header('Location: /cinemate/?page=account&success=login');
            exit;
        } else { // If the user is not found
            header('Location: /cinemate/?page=account&error=denied');
            exit;
        }
    }
?>