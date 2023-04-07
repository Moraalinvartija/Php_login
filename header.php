<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log in System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      </ul>
      <ul class="navbar-nav mr-auto">
   


                <!-- href='includes/logout.inc.php'>Sign out</a></li>"; -->
                <?php
                if (isset($_SESSION["useruid"])) {   //tsekkaa onko käyttäjä kirjautunut sisälle ja jos on ---> avaa lisää linkkejä sivustolle
                    echo " <li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Sign out</a></li>";
                    echo " <li class='nav-item'><a class='nav-link' href='profile.php'>Profile</a></li>";
                } else {
                }

                ?>
                <?php
                if (!isset($_SESSION["useruid"])) {   //tsekkaa onko käyttäjä kirjautunut sisälle ja ei---> avaa nämä linkit sen sijaan
                    echo " <li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign up</a></li>";
                }
                ?>
      </ul>
</div>
  </div>
</nav>
    </nav>