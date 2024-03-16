<div class="movie-object">
    <div class="movie-cover">
        <img src="<?php echo $movie["cover"] ?>" alt="<?php echo $movie["name"] ?>"></img>
    </div>
    <div class="movie-info">
        <div class="movie-title">
            <h1><?php echo $movie["name"] ?></h1>
            <p><?php echo $movie["year"] ?></p>
        </div>
        <p><?php echo $movie["description"] ?></p>
        <div class="movie-genres-box">
            <?php 
                foreach ($movie["genres"] as $genre){
                    echo "<div class='movie-genre'>
                        <h4>" . $genre . "</h4>
                    </div>";
                } 
            ?>
        </div>
    </div>
    <div class="showtimes">
        <button class="showtimes-button">Showtimes</button>
    </div>
</div>