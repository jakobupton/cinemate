
<?php
$movie = find_movie_by_id($showtime["imdb_id"]);
?>

<div class="movie-object">
    <img id="cover" src="<?php echo $movie["cover_path"] ?>" alt="<?php echo $movie["name"] ?>"></img>
    <div class="movie-info">
        <div class="movie-title">
            <h1 id="movieTitle"><?php echo $movie["title"] ?></h1>
            <p id="showtimeInfo"><?php echo date("h:ia", $showtime["time"]) . " | " . date("M d, Y", $showtime["date"]) ?></p>
        </div>
        <div class="movie-rating">
            <img src="img/icons/star.png" alt="star" id="star"></img>
            <p><?php echo $movie["rating"] . " / 10" ?></p>
        </div>
        <p id="description"><?php echo $movie["description"] ?></p>
        <div class="movie-genres-box">
            <?php 
                foreach ($movie["genres"] as $genre){
                    echo "<div class='movie-genre'>
                        <h4>" . ucfirst($genre) . "</h4>
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