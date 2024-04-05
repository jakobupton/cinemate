<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/model/database.php');
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
      preg_match('/tt\d+/', $Imdb_link, $matches); // finds from /tt to /
  
      // Extract the IMDb ID from the matches array
      $imdb_id = $matches[0];
  
      return $imdb_id; //output example tt0091042
  }  
  
  function addMovieToDB($Imdb_link){
    global $db;
    $ImdbID = convertToIMDBId($Imdb_link);
    $path = "http://www.omdbapi.com/?i=$ImdbID&apikey=" . IMDB_API_KEY;
    $json = file_get_contents($path);
    $movie = json_decode($json, TRUE);
    $title = filter_var($movie['Title'], FILTER_SANITIZE_STRING);
    $year = $movie['Year'];
    $cover_path = $movie['Poster'];
    $genres = $movie['Genre'];
    $plot = filter_var($movie['Plot'], FILTER_SANITIZE_STRING);
    $rating = $movie['imdbRating'];
    $sql = "INSERT INTO movies (imdb_id, title, year, cover_path, genres, description, rating) VALUES ('$ImdbID', '$title', '$year', '$cover_path', '$genres', '$plot', '$rating')";
    $result = mysqli_query($db, $sql);
  }

  function addShowTimeToDB($imdb_id, $date, $time){
    global $db;
    $sql = "INSERT INTO showtimes (imdb_id, date, time) VALUES ('$imdb_id', '$date', '$time')";
    $result = mysqli_query($db, $sql);
  }

  function deleteShowTime($show_id){
    global $db;
    $sql = "DELETE FROM showtimes WHERE show_id = '$show_id'";
    $result = mysqli_query($db, $sql);
  }

  function deleteMovieByID($imdb_id){
    global $db;
    $sql1 = "DELETE FROM showtimes WHERE imdb_id = '$imdb_id'";
    $sql2 = "DELETE FROM movies WHERE imdb_id = '$imdb_id'";
    mysqli_query($db, $sql1);
    mysqli_query($db, $sql2);
  }

  function addUserToDB($fullName, $email, $password){
    global $db;
    $sql = "INSERT INTO customer (fullname, email, password) VALUES ('$fullName', '$email', '$password')";
    $result = mysqli_query($db, $sql);
  }

  function verifyUser($email, $password){
    global $db;
    $sql = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db, $sql);
    $user = mysqli_fetch_assoc($result);
    //don't return the password in the session cookie
    unset($user["password"]);
    return $user;
  }

  function changeUserInfo($id, $email, $password, $fullname){
    global $db;
    $sql = "UPDATE customer SET fullname = '$fullname', email = '$email', password = '$password' WHERE customer_id = $id";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function fetchAccountById($id){
    global $db;
    $sql = "SELECT * FROM customer WHERE customer_id = '$id'";
    $result = mysqli_query($db, $sql);
    $user = mysqli_fetch_assoc($result);
    //don't return the password in the session cookie
    unset($user["password"]);
    return $user;
  }
?>