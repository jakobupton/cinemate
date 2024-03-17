<head>
    <link rel="stylesheet" href="styles/movies.css" />
</head>

<div class="content">
    <?php
        $Movies = find_all_movies();
        foreach ($Movies as $movie){
            include("private/view/components/movie_object.php");
        }
    ?>
</div>
    