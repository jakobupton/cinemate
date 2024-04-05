<head>
    <link rel="stylesheet" href="styles/admin.css" />
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
        <label for="movie_id">Movie</label>
        <select id="addShowTimeMovieID" name="movie_id" required>
            <option class="optionPlaceholder" value="" disabled selected>Select a movie</option>
            <?php 
                $Movies = find_all_movies();
                foreach ($Movies as $Movie){
                    echo "<option value='" . $Movie["imdb_id"] . "'>" . $Movie["title"] . "</option>";
                }
            ?>
        </select>
        <label for="date">Date</label>
        <input type="date" id="addShowTimeDate" name="date" required>  
        <label for="time">Time</label>
        <input type="time" id="addShowTimeTime" name="time" required>   
        <button class="adminSubmitButton" id="submitAddShowtime" type="submit" onClick="addShowTimeByID();">Add Showtime</button>
    </div>
    <div class="adminItem" id="promoteUser">
        <h1>Promote user</h1>
        <label for="promoteUserByID">User</label>
        <select id="promoteUserID" name="promoteUserByID" required>
            <option class="optionPlaceholder" value="" disabled selected>Select a user</option>
            <?php 
                $userList = find_all_users();
                foreach ($userList as $user){
                    if ($user["role"] != admin){
                        echo "<option value='" . $user["customer_id"] . "'>" . $user["fullname"] . " - " . $user["email"] . "</option>";
                    }
                }
            ?>  
        </select>
        <button class="adminSubmitButton" id="submitPromoteUser" type="submit" onClick="promoteUserByID();">Promote to Admin</button>
    </div>
    <div class="adminItem" id="deleteMovie">
        <h1>Delete a movie</h1>
        <label for="movie_id">Movie</label>
        <select id="deleteMovieID" name="movie_id" required>
            <option class="optionPlaceholder" value="" disabled selected>Select a movie</option>
            <?php 
                $Movies = find_all_movies();
                foreach ($Movies as $Movie){
                    echo "<option value='" . $Movie["imdb_id"] . "'>" . $Movie["title"] . "</option>";
                }
            ?>
        </select>
        <button class="adminSubmitButton" id="submitDeleteMovie" type="submit" onClick="deleteMovieByID();">Delete Movie</button>
    </div>
    <div class="adminItem" id="deleteShowtime">
        <h1>Delete a Showtime</h1>
        <label for="showtime_id">Showtime</label>
        <select id="deleteShowTimeID" name="showtime_id" required>
            <option class="optionPlaceholder" value="" disabled selected>Select a showtime</option>
            <?php 
                $Showtimes = find_all_showtimes();
                foreach ($Showtimes as $Showtime){
                    $ShowtimeMovie = find_movie_by_id($Showtime["imdb_id"]);
                    echo "<option value='" . $Showtime["show_id"] . "'>" . $ShowtimeMovie["title"] . " - " . $Showtime["date"] . " " . $Showtime["time"] . "</option>";
                }
            ?>
        </select>
        <button class="adminSubmitButton" id="submitDeleteShowtime" type="submit" onClick="deleteShowTimeByID();">Delete Showtime</button>
    </div>
    <div class="adminItem" id="demoteUser">
        <h1>Demote user</h1>
        <label for="demoteUserByID">User</label>
        <select id="demoteUserID" name="demoteUserByID" required>
            <option class="optionPlaceholder" value="" disabled selected>Select a user</option>
            <?php 
                $userList = find_all_users();
                foreach ($userList as $user){
                    if ($user["role"] == admin){
                        echo "<option value='" . $user["customer_id"] . "'>" . $user["fullname"] . " - " . $user["email"] . "</option>";
                    }
                }
            ?>  
        </select>
        <button class="adminSubmitButton" id="submitDemoteUser" type="submit" onClick="demoteUserByID();">Demote to User</button>
    </div>
    <script src="scripts/admin.js"></script>
</div>