<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title> Sisäänkirjautumis tehtävä</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav>
        <div class="wrapper">
            
            <a href="index.php"> </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                
                <?php
                if (isset($_SESSION["useruid"])) {   //tsekkaa onko käyttäjä kirjautunut sisälle ja jos on ---> avaa lisää linkkejä sivustolle
                    echo" <li style='float:right'><a href='includes/logout.inc.php'>Sign out</a></li>";
                    echo" <li style='float:right'><a href='profile.php'>Profile</a></li>";


                } else {

                }

                ?>
                <?php
                if (!isset($_SESSION["useruid"])) {   //tsekkaa onko käyttäjä kirjautunut sisälle ja ei---> avaa nämä linkit sen sijaan
                    echo" <li style='float:right'><a href='login.php'>Login</a></li>";
                    echo"<li style='float:right'><a href='signup.php'>Sign up</a></li>";


                }
                ?>
                
            </ul>
            
       
    </nav>