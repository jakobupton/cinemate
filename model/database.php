<?php
    $dsn = 'mysql:host=localhost;dbname=cinemate';
    $username = 'admin';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        // handle error here (display error page?)
        exit();
    }
?>