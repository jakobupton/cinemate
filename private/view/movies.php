<head>
    <link rel="stylesheet" href="styles/movies.css" />
</head>

<div class="content">
    <?php
        $Movies = find_all_movies();
        echo "<h1 id='showtimesListTitle'>Currently Playing</h1>";
        foreach ($Movies as $movie){
            include("private/view/components/movie_object.php");
        }
    ?>
</div>
    