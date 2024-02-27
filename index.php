<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cinemate</title>
        <link rel="stylesheet" href="styles/main.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="sidebar">
            <div class="top">
                <div class="logo">
                    <i class="bx bxl-codepen"></i>
                    <span>inemate</span>
                </div>
                <i class="bx bx-menu" id="btn"></i>
            </div>
            <div class="user">
                <img src="img/me.png" alt="me" class="user-img">
                <div>
                    <p class="bold">Jakob U.</p>
                    <p>Admin</p>
                </div>
            </div>
            <ul>
                <li>
                    <a href="#">
                        <i class="bx bx-home"></i>
                        <span class="nav-item">Home</span>
                    </a>
                    <span class="tooltip">Home</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-id-card"></i>
                        <span class="nav-item">Tickets</span>
                    </a>
                    <span class="tooltip">Tickets</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-current-location"></i>
                        <span class="nav-item">Theatres</span>
                    </a>
                    <span class="tooltip">Theatres</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-camera-movie"></i>
                        <span class="nav-item">Movies</span>
                    </a>
                    <span class="tooltip">Movies</span>
                </li>
            </ul>
        </div>

        <div class="main-content">
            <div class="container">
                <h1>Cinemate</h1>
                <div class="container">
                    <h1>Right Side</h1>
                </div>
            </div>
        </div>
    </body>
    <script>
        let btn = document.querySelector('#btn')
        let sidebar = document.querySelector('.sidebar')
        btn.onclick = function() {
            sidebar.classList.toggle('active')
        };
    </script>
</html>