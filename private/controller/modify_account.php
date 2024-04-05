<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/cinemate/private/model/initialize.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST["password"] != $_POST["verifypassword"]) {
            header('Location: /cinemate/?page=account&error=mismatch');
            exit;
        }
        changeUserInfo($_POST['customer_id'], $_POST['email'], $_POST['password'], $_POST['fullname']);
        unset($_SESSION["user"]);
        setcookie("PHPSESSID", "", time() - 3600, "/"); // delete the cookie to clear the session
        session_destroy();
        $_SESSION["user"] = fetchAccountById($_POST['customer_id']);
        header('Location: /cinemate/?page=account&success=modified');
        exit;
    }
?>