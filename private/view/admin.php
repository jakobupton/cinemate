<head>
    <link rel="stylesheet" href="styles/admin.css" />
</head>
<div class="content">
    <h1>Add a movie</h1>
    <form action="private/controller/add_movie.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="imdb_link">IMDB Link</label>
            <input type="text" id="imdb_link" name="imdb_link" required>
        </div>
        <button type="submit">Add Movie</button>
    </form>
</div>