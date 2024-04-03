<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Cinemate</title>
      <link rel="icon" href="img/icons/c_logo.png">
      <link rel="stylesheet" href="styles/index.css" />
      <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
   </head>
   <body>
      <?php 
         require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/model/initialize.php'); 
         if (isset($_GET['logout'])) {
            session_destroy();
            header("Location: /cinemate/?page=home");
         }
         if (!isset($_SESSION["user"])){
            session_start();
         }
      ?>
      <div class="userInfo">
         <div class="user">
            <?php if (isset($_SESSION["user"])) {?>
               <p id="user-name"><?php echo $_SESSION["user"]["fullname"]?></p>
               <p id="user-email"><?php echo $_SESSION["user"]["email"]?></p>
               <p id="user-role">Admin | <a id="logout" href="/cinemate/?logout">Logout</a></p>
            <?php }else{?>
               <p id="user-name">Not Logged In</p>
               <p id="user-role"><a id="logout" href="/cinemate/?page=account">Log in</a></p>
            <?php } ?>
         </div>
         <a href="/cinemate/?page=account"><img src="img/icons/icon_user.png" alt="user"/></a>
      </div>
      <div class="sidebar">
         <div class="top">
            <div class="logo">
               <img src="img/icons/c_logo.png" id="cinemate_logo" alt="cinemate c" class="cinemate-logo"></img>
            </div>
         </div>
         <ul>
            <li>
               <a href="/cinemate/?page=home">
                  <div class="sidebar-item">
                     <img src="img/icons/icon_home.png" alt="showtimes"/>
                     <span class="nav-item">Home</span>
                  </div>
               </a>
            </li>
            <li>
               <a href="/cinemate/?page=movies">
                  <div class="sidebar-item">
                     <img src="img/icons/icon_movie.png" alt="showtimes"/>
                     <span class="nav-item">Movies</span>
                  </div>
               </a>
            </li>
            <li>
               <a href="/cinemate/?page=showtimes">
                  <div class="sidebar-item">
                     <img src="img/icons/icon_theatre.png" alt="showtimes"/>
                     <span class="nav-item">Showtimes</span>
                  </div>
               </a>
            </li>
            <?php if ($_SESSION["user"]["role"] == "admin"){?>
               <li>
                  <a href="/cinemate/?page=admin">
                     <div class="sidebar-item">
                        <img src="img/icons/icon_gear.png" alt="showtimes"/>
                        <span class="nav-item">Admin</span>
                     </div>
                  </a>
               </li>
            <?php }?>
         </ul>
      </div>
      <div class="main-content">
         <?php 
            $page = $_GET['page'];
            switch ($page) {
               case "tickets":
                  require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/view/tickets.php');
                  break;
               case "movies":
                  require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/view/movies.php');
                  break;
               case "showtimes":
                  require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/view/showtimes.php');
                  break;
               case "admin":
                   require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/view/admin.php');
                  break;
               case "account":
                  require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/view/account.php');
                  break;
               default:
                  require_once($_SERVER['DOCUMENT_ROOT'] . '/cinemate/private/view/home.php');
                  break;
            }
         ?>
      </div>
   </body>
</html>