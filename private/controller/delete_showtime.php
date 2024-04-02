<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/cinemate/private/model/initialize.php");
    if(isset($_POST["showtime_id"])){
        $show_id = $_POST["showtime_id"];
        deleteShowTime($show_id);
    }else{
        echo "POST Imdb_link not set";
    }
?>