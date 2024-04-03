<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/cinemate/private/model/initialize.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST["password"] != $_POST["verifypassword"]) {
            header('Location: /cinemate/?page=account&error=mismatch');
            exit;
        }
        addUserToDB($_POST["name"], $_POST["email"], $_POST["password"]);
        $user = verifyUser($_POST["email"], $_POST["password"]); // login user after signup for quality of life
        $_SESSION["user"] = $user;
        header('Location: /cinemate/?page=account&success=signup');
        exit;
    }
?>