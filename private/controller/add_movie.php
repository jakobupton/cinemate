<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/cinemate/private/model/initialize.php");
    if(isset($_POST["imdb_link"])){
        $link = $_POST["imdb_link"];
        addMovieToDB($link);
    }else{
        echo "POST Imdb_link not set";
    }
?>