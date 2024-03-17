<head>
    <link rel="stylesheet" href="styles/movies.css" />
</head>
<div class="content">
    <?php
        if (isset($_GET["movie"])){
            $showtimes = find_showtime_by_movie($_GET["movie"]);
            $movie = find_movie_by_id($_GET["movie"]);
            echo "<h1> Showtimes for " . $movie["title"] . "</h1>";
        }else{
            $showtimes = find_all_showtimes();
            echo "<h1>All Current Showtimes</h1>";
        }
        foreach ($showtimes as $showtime){
            include("private/view/components/showtime_object.php");
        }
    ?>
</div>