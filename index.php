<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Cinemate | Booking</title>
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
         $USERPHOTO = "img/me.png"; // $DB USER IMAGE
         $MovieCoverPath = "img/movies/spiderman_blue.jpg"; // Movie cover
         ?>
      <div class="sidebar">
         <div class="top">
            <div class="logo">
               <img src="img/icons/c_logo.png" alt="cinemate c"class="cinemate-logo" onclick="toggleSidebar()"></img>
            </div>
         </div>
         <ul>
            <li>
               <a href="#Home">
                  <!-- Ref to Home -->
                  <img src="img/icons/icon_home.png" alt="Home"/>
                  <span class="nav-item">Home</span>
               </a>
            </li>
            <li>
               <a href="#Tickets">
                  <!-- Ref to Tickets -->
                  <img src="img/icons/icon_ticket.png" alt="Tickets"/>
                  <span class="nav-item">Tickets</span>
               </a>
            </li>
            <li>
               <a href="#Theatres">
                  <!-- Ref to Theatres -->
                  <img src="img/icons/icon_theatre.png" alt="Theatres"/>
                  <span class="nav-item">Theatres</span>
               </a>
            </li>
            <li>
               <a href="#Movies">
                  <!-- Ref to Movies -->
                  <img src="img/icons/icon_movie.png" alt="Movies"/>
                  <span class="nav-item">Movies</span>
               </a>
            </li>
         </ul>
      </div>
      <div class="main-content">
         <div class="content-left">
            <div class="movie-info-top">
               <h1>BOOK A SHOW</h1>
               <p id="movie-showtime">Screen 3 | 8:30pm (18 Feb 2024)</p>
            </div>
            <div class="movie-wrapper">
               <div class="movie-info-left">
                  <img src="<?php echo $MovieCoverPath ?>" id="movie-cover"></img>
               </div>
               <div class="movie-info-right">
                  <div class="movie-info-right-top">
                     <div class="movie-title">
                        <h2 id="movie-title">Spider-Man: Into the Spider-Verse</h2>
                     </div>
                     <div class="movie-genre-box">
                        <div class="movie-genre">
                           <p>Animated</p>
                        </div>
                        <div class="movie-genre">
                           <p>Action</p>
                        </div>
                     </div>
                     <!-- Grab genre -->
                  </div>
                  <div class="movie-rating">
                     <img src="img/icons/star.png" alt="star" id="star"></img>
                     <p>8.4 / 10</p>
                  </div>
                  <p class="movie-desc">Teen Miles Morales becomes the Spider-Man of his universe and must join with five spider-powered individuals from other dimensions to stop a threat for all realities.</p>
                  <p class="movie-showing-type">Regular Screening</p>
               </div>
            </div>
            <div class="movie-seating">
               <div class="movie-screen">
                    <div class="box"></div>
               </div>
               <div class="movie-seats-section">
                  <div class="movie-seats-side">
                     <?php 
                        for ($i = ord('A'); $i <= ord('G'); $i++){ 
                            $letter = chr($i);
                            for ($j = 0; $j < 3; $j++){
                                echo "<div class='seat' id='" . $letter . $j . "'></div>";
                            }       
                        }
                        ?>  
                  </div>
                  <div class="movie-seats-center">
                     <?php 
                        for ($i = ord('A'); $i <= ord('G'); $i++){ 
                            $letter = chr($i);
                            for ($j = 3; $j < 7; $j++) {
                                echo "<div class='seat' id='" . $letter . $j . "'></div>";
                            }       
                        }
                        ?>
                  </div>
                  <div class="movie-seats-side">
                     <?php 
                        for ($i = ord('A'); $i <= ord('G'); $i++){ 
                            $letter = chr($i);
                            for ($j = 7; $j < 10; $j++) {
                                echo "<div class='seat' id='" . $letter . $j . "'></div>";
                            }       
                        }
                        ?>
                  </div>
                  <div class="movie-seat-rows">
                     <?php 
                        for ($i = ord('A'); $i <= ord('G'); $i++){ 
                            $letter = chr($i);
                            echo "<p>" . $letter . "</p>";
                        }
                        ?>
                  </div>
               </div>
               <div class="seating-legend">
                  <div class="box" id="available"></div>
                  <p>Available</p>
                  <div class="box" id="selected"></div>
                  <p>Selected</p>
                  <div class="box" id="reserved"></div>
                  <p>Reserved</p>
               </div>
            </div>
         </div>
         <div class="content-right">
            <div class="order-status">
               <h3>INCOMPLETE ORDER</h3>
               <p>In Progress
               </h3>
            </div>
            <hr class="dotted-line">
            </hr>
            <p>Order ID #091322</p>
            <h3>Selected Seats</h3>
            <p>Regular</p>
            <div class="selected-seats">
               <p>F-6</p>
               <p>F-7</p>
            </div>
            <hr>
            <div class="price-info">
               <div class="price-item">
                  <p>Subtotal</p>
                  <p>40</p>
               </div>
               <div class="price-item">
                  <p>Discount</p>
                  <p>00</p>
               </div>
               <div class="price-item">
                  <p>Tax</p>
                  <p>5.50</p>
               </div>
            </div>
            <hr>
            <div class="price-item">
               <h3>Total</h3>
               <p>$45.50</p>
            </div>
            <div class="payment-select-box">
               <div class="payment-select">
                  <label for="payment">Payment</label>
                  <form id="payment" action="">
                     <input type="radio" id="debit" name="payment" value="debit">
                     <label for="credit">Debit</label><br>
                     <input type="radio" id="credit" name="payment" value="credit">
                     <label for="debit">Credit</label><br>
                     <input type="radio" id="paypal" name="payment" value="paypal">
                     <label for="debit">Paypal</label><br>
                  </form>
               </div>
            </div>
            <div class="customer-info">
                <h3>Customer Details</h3>
                <form>
                    <label for="name">Customer Name</label>
                    <input type="text" placeholder="John Smith" id="name" name="name">
                    <label for="phone">Contact Number</label>
                    <input type="tel" placeholder="012 345 6789" id="phone" name="phone">
                </form>
                <div class="customer-info-buttons">
                    <button class="btn" id="cancel">Cancel</button>
                    <button class="btn" id="confirm">Confirm</button>
                </div>
            </div>
         </div>
      </div>
      <script src="scripts/main.js"></script>
   </body>
</html>