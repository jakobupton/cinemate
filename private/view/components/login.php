<head>
    <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<div class="content">
    <div class="userAccount" id="login">
        <h1>Log in</h1>
        <form action="private/controller/login.php" method="POST">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" id="submitButton" value="Log in">
        </form>
        <?php 
            if ($_GET["error"] == "denied"){
                echo "<p class='error'>Email or Password is incorrect.</p>";
            }
            if ($_GET["success"] == "login"){
                echo "<p class='success'>Logged in successfully.</p>";
            }
        ?>
    </div>
    <div class="userAccount" id="signup">
        <h1>Sign up</h1>
        <form action="private/controller/signup.php" method="POST">
            <label for="username">Full Name:</label>
            <input type="text" id="fullname" name="name" required><br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <label for="verifypassword">Confirm Password:</label>
            <input type="password" id="verifypassword" name="verifypassword" required><br>

            <input type="submit" id="submitButton" value="Sign up">
        </form>
        <?php 
            if ($_GET["error"] == "mismatch"){
                echo "<p class='error'>Passwords do not match</p>";
            }
            if ($_GET["error"] == "exists"){
                echo "<p class='error'>Account already exists</p>";
            }
            if ($_GET["success"] == "signup"){
                echo "<p class='success'>Account created successfully</p>";
            }
        ?>
    </div>
</div>