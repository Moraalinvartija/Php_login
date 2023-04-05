
    <?php 
    include_once "header.php"
    ?>
    <div class="wrapper"> 
        <section class="signup-form"> 
        <?php
        if (!isset($_SESSION["useruid"])) {   //tsekkaa onko käyttäjä kirjautunut sisälle ja jos on ---> avaa lisää linkkejä sivustolle
                    echo" <div> <h3> Already have an account?</h3>
                     <a href='login.php'>Click here</a>
                      to log in </div>";
        }
                ?>
            <div class="signup-form-form">
            <h2> Sign Up </h2>
            <form action="includes/signup.inc.php" method="post">
             <input type="text" name="fname" placeholder="First Name"><br>
             <input type="text" name="lname" placeholder="Last Name"><br>
             <input type="text" name="email" placeholder="E-mail"><br>
             <input type="text" name="uid" placeholder="Username"><br>
             <input type="password" name="pwd" placeholder="Password"><br>
             <input type="password" name="pwdrepeat" placeholder="Confirm Password"><br>
             <button type="submit" name="submit">Register</button>
            </form>
            </div>
            <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Täytä kaikki lomakkeen kentät!</p>";

            } 
            else if ($_GET["error"] == "invaliduid") {
                echo "<p>Käyttäjätunnus sisältää kiellettyjä merkkejä!</p>";
            }

             
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Sähköposti sisältää kiellettyjä merkkejä! / Anna oikea sähköposti!</p>";

            } 
            else if ($_GET["error"] == "invalidpwdmatch") {
                echo "<p>Salasana ja salasanan uudelleen kirjoitus eivät täsmää!</p>";

            } 
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Jotain meni pieleen, yritä uudestaan!</p>";
            
            } 
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Valitsemasi käyttäjätili on jo käytössä!</p>";

            } 
            else if ($_GET["error"] == "none") {
                echo "<p>Resisteröinti onnistunut!</p>";

            }

            }

        ?>
        </section>

       
    </div>
</body>
<?php
include_once "footer.php" 
?>