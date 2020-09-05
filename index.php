<?php

    session_start();
    if(!isset($_SESSION['email']))
    {
        header("location: login.php");
    }
    $name=$_SESSION['name'];
?>



<!DOCTYPE html>
<html lang="en" onclick="jump()">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width=device-width, intial-scale=1.0">
        <title>Save the Drago!</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <a class="logout" href="logout.php">Logout Now</a>
        <div class="container">
            <div class="welcome">Welcome <?php echo  $name;?></div>
            <div class="gameOver">Game Over!</div>
            <div class="dino"></div>
            <div id="scoreid" class="scorecount">Your Score: 0<div>
            <div class="zom obstacleanim"></div>
        </div>
    </body>
</html>