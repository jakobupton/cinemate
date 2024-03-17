<?php 
require_once("private/model/query.php");

if (isset($_POST['imdb_link'])) {

    global $db;
    // Retrieve the input text
    $imdb_link = $_POST['imdb_link'];
    $imdb_id = convertToIMDBId($imdb_link);

   if(addMovieToDB($imdb_id)){
      require_once("private/view/add_movie.php");
   };
}


?>