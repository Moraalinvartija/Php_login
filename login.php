
    <?php 
    include_once "header.php"
    ?>
    <?php
        if (!isset($_SESSION["useruid"])) {   //tsekkaa onko käyttäjä kirjautunut sisälle ja jos on ---> avaa lisää linkkejä sivustolle
                    echo" <div class='text-center mt-2 name'> Not user yet?<br>
                    <a href='signup.php'>Click here</a><br>
                     to create account </div>";
                    
        }
        
                ?>
                <div class="wrapper"> 
                <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
        </div>
         <div class="mt-4 text-center name">
            <h3>Login</h3>
        </div>
        <form class="p-3 mt-3" action="includes/login.inc.php" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="uid" placeholder="Username/Email..."><br>     
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="pwd" placeholder="Password"><br>
            </div>
            
            <button class="btn btn-dark mt-3"type="submit" name="submit">Login</button>
            <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<div class='text-center mt-4 fs-6'>Täytä käyttäjätunnus sekä salasana kenttä!</div>";

            } 
            else if ($_GET["error"] == "wronglogin") {
                echo "<div class='text-center mt-4 fs-6'>Väärä käyttäjätunnus tai salasana!</div>";
            }

            }

        ?>
      


    </div>
</body>
<?php
include_once "footer.php" 
?>