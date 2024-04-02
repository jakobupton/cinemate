<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/cinemate/private/model/initialize.php");
    if(isset($_POST["imdb_id"])){
        $imdb_id = $_POST["imdb_id"];
        deleteMovieByID($imdb_id);
    }else{
        echo "POST Imdb_link not set";
    }
?>