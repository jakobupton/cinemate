<head>
    <link rel="stylesheet" href="styles/admin.css" />
    <script src="scripts/admin.js"></script>
</head>
<div class="content">
    <div class="adminItem" id="addMovie">
        <h1>Add a Movie</h1>
        <div class="form-group">
            <label for="imdb_link">IMDB Link</label>
            <input type="text" id="imdb_link" name="imdb_link" placeholder="https://www.imdb.com/title/tt0816692/" required>
        </div>
        <button class="adminSubmitButton" id="submitAddMovie" type="submit" onClick="addMovieByLink();">Add Movie</button>
    </div>
    <div class="adminItem" id="addShowtime">
        <h1>Add a Showtime</h1>
        <form>
            <label for="movie_id">Movie</label>
            <select id="movie_id" name="movie_id" required>
                <option value="" disabled selected>Select a movie</option>
                <?php 
                    $Movies = find_all_movies();
                    foreach ($Movies as $Movie){
                        echo "<option value='" . $Movie["id"] . "'>" . $Movie["title"] . "</option>";
                    }
                ?>
            </select>
            <label for="date">Date</label>
            <input type="date" id="date" name="date" required>  
            <label for="time">Time</label>
            <input type="time" id="time" name="time" required>   
            <button class="adminSubmitButton" id="submitAddShowtime" type="submit">Add Showtime</button>
        </form>
    </div>
    <div class="adminItem" id="deleteMovie">
        <h1>Delete a movie</h1>
        <form>
            <label for="movie_id">Movie</label>
            <select id="movie_id" name="movie_id" required>
                <option value="" disabled selected>Select a movie</option>
                <?php 
                    $Movies = find_all_movies();
                    foreach ($Movies as $Movie){
                        echo "<option value='" . $Movie["id"] . "'>" . $Movie["title"] . "</option>";
                    }
                ?>
            </select>
            <button class="adminSubmitButton" id="submitDeleteMovie" type="submit">Delete Movie</button>
        </form>
    </div>
    <div class="adminItem" id="deleteShowtime">
        <h1>Delete a Showtime</h1>
        <form>
            <label for="showtime_id">Showtime</label>
            <select id="showtime_id" name="showtime_id" required>
                <option value="" disabled selected>Select a showtime</option>
                <?php 
                    $Showtimes = find_all_showtimes();
                    foreach ($Showtimes as $Showtime){
                        $ShowtimeMovie = find_movie_by_id($Showtime["imdb_id"]);
                        echo "<option value='" . $Showtime["id"] . "'>" . $ShowtimeMovie["title"] . " - " . $Showtime["date"] . " " . $Showtime["time"] . "</option>";
                    }
                ?>
            </select>
            <button class="adminSubmitButton" id="submitDeleteShowtime" type="submit">Delete Showtime</button>
        </form>
    </div>
</div>