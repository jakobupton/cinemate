<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/model/database.php');
  require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/model/query.php');
  require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/model/verification.php');
  $db = db_connect();
  $errors = [];
?>