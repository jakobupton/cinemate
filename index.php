<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cinemate</title>
        <link rel="icon" href="img/icons/c_logo.png">
        <link rel="stylesheet" href="styles/main.css" />
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    </head>

    <body>
        <?php 
        $USERNAME = 'Jakob U.'; // $DB USER NAME
        $USERROLE = 'Admin'; // $DB ROLE if Admin
        $USERPHOTO = "img/me.png" // $DB USER IMAGE
        ?>
        <div class="sidebar">
            <div class="top">
                <div class="logo">
                    <img src="img/icons/c_logo.png" alt="Cinemate C"class="cinemate-logo" id="logo"></img>
                    <img src="img/icons/cinemate.png" alt="Cinemate Title" class="cinemate-name"></img>
                </div>
            </div>
            <!-- <div class="user">
                <img src=<?php echo $USERPHOTO ?> alt="photo" class="user-img" />
                <div>
                    <p class="bold"><?php echo $USERNAME;?></p>
                    <p><?php echo $USERROLE?></p>
                </div>
            </div> -->
            <ul>
                <li>
                    <a href="#">
                        <!-- Ref to Home -->
                        <img src="img/icons/home_icon.png" alt="Home"/>
                        <span class="nav-item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <!-- Ref to Tickets -->
                        <img src="img/icons/ticket_icon.png" alt="Tickets"/>
                        <span class="nav-item">Tickets</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <!-- Ref to Theatres -->
                        <img src="img/icons/clapper_icon.png" alt="Theatres"/>
                        <span class="nav-item">Theatres</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <!-- Ref to Movies -->
                        <img src="img/icons/film_icon.png" alt="Movies"/>
                        <span class="nav-item">Movies</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main-content">
            <h1>test</h1>
            <p> test test</p>
        </div>
    </body>
    <script src="scripts/main.js"></script>
</html>