<head>
    <link rel="stylesheet" href="styles/movies.css" />
</head>
<?php
    if (isset($_GET["movie"])){
        $showtimes = find_showtime_by_movie($_GET["movie"]);
    }else{
        $showtimes = find_all_showtimes();
    }
?>
<div class="content">
    <?php
        foreach ($showtimes as $showtime){
            include("private/view/components/showtime_object.php");
        }
    ?>
</div>