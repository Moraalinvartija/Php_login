
    <?php 
    include_once "header.php"
    ?>
    <div class="wrapper"> 
        <section class="signup-form"> 
            <?php
        if (!isset($_SESSION["useruid"])) {   //tsekkaa onko käyttäjä kirjautunut sisälle ja jos on ---> avaa lisää linkkejä sivustolle
                    echo"  <h3> Not user yet?</h3>
                     <a href='signup.php'>Click here</a>
                      to create account";
        }
                ?>
            <div class="signup-form-form">
            <h2> Login </h2>
            <form action="includes/login.inc.php" method="post">
             <input type="text" name="uid" placeholder="Username/Email..."><br>     
             <input type="password" name="pwd" placeholder="Password"><br>
             <button type="submit" name="submit">Login</button>
            </form>
            </div>
            <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Täytä käyttäjätunnus sekä salanasa kenttä!</p>";

            } 
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Väärä käyttäjätunnus tai salasana!</p>";
            }

            }

        ?>
        </section>


    </div>
</body>
<?php
include_once "footer.php" 
?>