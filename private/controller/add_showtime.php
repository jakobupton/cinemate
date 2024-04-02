<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/cinemate/private/model/initialize.php");
    if(null !== $_POST["movie_id"] and null !== $_POST["date"] and null !== $_POST["time"]){
        $movie_id = $_POST["movie_id"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        addShowtimeToDB($movie_id, $date, $time);
    }else{
        echo "POST movie_id, date, or time not set";
    }
?>