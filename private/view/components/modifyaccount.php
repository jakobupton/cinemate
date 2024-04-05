<head>
    <link rel="stylesheet" href="styles/login.css" />
</head>

<div class="modifyUserContent">
    <h1>Update information</h1>
    <form action="private/controller/modify_account.php" method="POST">
        <input type="hidden" name="customer_id" value=<?php echo $_SESSION["user"]["customer_id"] ?>>
        <label for="username">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="verifypassword">Confirm Password:</label>
        <input type="password" id="verifypassword" name="verifypassword" required><br>
        <input type="submit" id="submitButton" value="Change account">
    </form>
    <?php 
        if ($_GET["error"] == "mismatch"){
            echo "<p class='error'>Passwords do not match</p>";
        }
        if ($_GET["error"] == "exists"){
            echo "<p class='error'>Account already exists</p>";
        }
    ?>
</div>