<?php 
require_once("/private/model/query.php");

if (isset($_POST['imdb_link'])) {

    global $db;
    // Retrieve the input text
    $imdb_link = $_POST['imdb_link'];
    $imdb_id = convertToIMDBId($imdb_link);

    addMovieToDB($imdb_id);
}
?>