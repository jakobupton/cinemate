<head>
    <link rel="stylesheet" href="styles/movies.css" />
</head>
<?php 
    $Movies = find_all_movies();
?>
<div class="content">
    <?php
        foreach ($Movies as $movie){
            include("private/view/components/movie_object.php");
        }
    ?>
</div>
    