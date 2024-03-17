
<?php
$movie = find_movie_by_id($showtime["imdb_id"]);
?>

<div class="movie-object">
    <div class="movie-cover">
        <img src="<?php echo $movie["cover_path"] ?>" alt="<?php echo $movie["name"] ?>"></img>
    </div>
    <div class="movie-info">
        <div class="movie-title">
            <h1><?php echo $movie["title"] ?></h1>
            <p><?php echo $showtime["time"] . " | " . $showtime["date"] ?></p>
        </div>
        <div class="movie-rating">
            <img src="img/icons/star.png" alt="star" id="star"></img>
            <p><?php echo $movie["rating"] . " / 10" ?></p>
        </div>
        <p><?php echo $movie["description"] ?></p>
        <div class="movie-genres-box">
            <?php 
                foreach ($movie["genres"] as $genre){
                    echo "<div class='movie-genre'>
                        <h4>" . $movie["genres"] . "</h4>
                    </div>";
                } 
            ?>
        </div>
    </div>
    <div class="showtimes">
        <a href= <?php echo "/cinemate/?page=tickets&showtime=" . $showtime["show_id"]?> >
            <button class="showtimes-button">Book Seats</button>
        </a>
    </div>
</div>