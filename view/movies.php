<head>
    <link rel="stylesheet" href="styles/movies.css" />
</head>
<?php 
    $Movies = array(
        array(
            "name" => "Spider-Man: Into the Spider-Verse",
            "description" => "Teen Miles Morales becomes the Spider-Man of his universe and must join with five spider-powered individuals from other dimensions to stop a threat for all realities.",
            "cover" => "img/movies/spiderman.jpg",
            "genres" => array("Action", "Advencture", "Rom-Com"),
            "year" => 2022
        ),
        array(
            "name" => "Spider-Man: Into the Spider-Verse",
            "description" => "Teen Miles Morales becomes the Spider-Man of his universe and must join with five spider-powered individuals from other dimensions to stop a threat for all realities.",
            "cover" => "img/movies/spiderman.jpg",
            "genres" => array("Action", "Advencture", "Rom-Com"),
            "year" => 2022
        ),
        array(
            "name" => "Spider-Man: Into the Spider-Verse",
            "description" => "Teen Miles Morales becomes the Spider-Man of his universe and must join with five spider-powered individuals from other dimensions to stop a threat for all realities.",
            "cover" => "img/movies/spiderman.jpg",
            "genres" => array("Action", "Advencture", "Rom-Com"),
            "year" => 2022
        ),
        array(
            "name" => "Spider-Man: Into the Spider-Verse",
            "description" => "Teen Miles Morales becomes the Spider-Man of his universe and must join with five spider-powered individuals from other dimensions to stop a threat for all realities.",
            "cover" => "img/movies/spiderman.jpg",
            "genres" => array("Action", "Advencture", "Rom-Com"),
            "year" => 2022
        ),
        array(
            "name" => "Spider-Man: Into the Spider-Verse",
            "description" => "Teen Miles Morales becomes the Spider-Man of his universe and must join with five spider-powered individuals from other dimensions to stop a threat for all realities.",
            "cover" => "img/movies/spiderman.jpg",
            "genres" => array("Action", "Advencture", "Rom-Com"),
            "year" => 2022
        ),
        array(
            "name" => "Spider-Man 2",
            "description" => "the quick brown fox jumps over the lazy dog n shiet",
            "cover" => "img/movies/spiderman_blue.jpg",
            "genres" => array("Animated", "Whimsical"),
            "year" => 2024
        )
    );
?>
<div class="content">
    <?php
        foreach ($Movies as $movie){
            include("view/components/movie_object.php");
        }
    ?>
</div>
    