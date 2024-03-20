<?php 
    require_once('private/model/query.php');

    if(isset($_POST["imdb_link"])){
        $link = $_POST["imdb_link"];
        $status = addMovieToDB($link);
    }

?>