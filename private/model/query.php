<?php
    // Movies

    function find_all_movies() {
      global $db;
  
      $sql = "SELECT * FROM movies";
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
      
      $movies = []; // Initialize an empty array to store movies
      
      while ($movie = mysqli_fetch_assoc($result)) {
          $movies[] = $movie; // Add each fetched movie to the array
      }
      
      mysqli_free_result($result); // Free the result set
      
      for($i = 0; $i < count($movies); $i++){
          $movies[$i]["genres"] = explode(",", $movies[$i]["genres"]);
      }
      return $movies;
  }
  

    function find_movie_by_id($id) {
      global $db;

      $sql = "SELECT * FROM movies ";
      $sql .= "WHERE imdb_id='" . db_escape($db, $id) . "' ";
      $sql .= "LIMIT 1";
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
      $movie = mysqli_fetch_assoc($result); // find first
      mysqli_free_result($result);
      $movie["genres"] = explode(",", $movie["genres"]);
      return $movie; // returns an assoc. array
    }

    //ShowTimes 

    function find_all_showtimes(){
      global $db;

      $sql = "SELECT * from showtimes";
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
      return $result;
    }

    function find_showtime_by_movie($id){
      global $db;
  
      $sql = "SELECT * FROM showtimes ";
      $sql .= "WHERE imdb_id='" . db_escape($db, $id) . "' ";
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
  
      return $result;
  }

    function find_showtime_by_id($id) {
      global $db;

      $sql = "SELECT * FROM showtimes ";
      $sql .= "WHERE show_id='" . db_escape($db, $id) . "' ";
      $sql .= "LIMIT 1";
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
      $showtime = mysqli_fetch_assoc($result); // find first
      mysqli_free_result($result);
      return $showtime; // returns an assoc. array
    }

    function convertToIMDBId($Imdb_link){
      // Match the IMDb ID using a regular expression
      preg_match('/tt\d+/', $link, $matches); // finds from /tt to /
  
      // Extract the IMDb ID from the matches array
      $imdb_id = $matches[0];
  
      return $imdb_id; //output example tt0091042
  }
  
  function addMovieToDB($ImdbID){
    global $db;
    
      $path = "http://www.omdbapi.com/?i=$ImdbID&apikey=" . IMDB_API_KEY;
      $json = file_get_contents($path);
      $movie = json_decode($json, TRUE);
      $title = $movie['Title'];
      $year = $movie['Year'];
      $genres = $movie['Genre'];
      $plot = $movie['Plot'];
      $rating = $movie['imdbRating'];
  
      $sql = "INSERT INTO movies (imdb_id, title, year, genres, plot, rating) VALUES ('$ImdbID', '$title', '$year', '$genres', '$plot', '$rating')";

      $result = mysqli_query($db, $sql);

      return $result;
  }

?>