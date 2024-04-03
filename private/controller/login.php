<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/cinemate/private/model/initialize.php");
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    ini_set('log_errors',1);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $result = verifyUser($_POST["email"], $_POST["password"]);
        if ($result) { // If the user is found
            $_SESSION["user"] = $result;
            foreach ($_SESSION["user"] as $key => $value) {
                echo $key . " => " . $value . "<br>";
            }
            header('Location: /cinemate/?page=account&success=login');
            exit;
        } else { // If the user is not found
            header('Location: /cinemate/?page=account&error=denied');
            exit;
        }
    }
?>