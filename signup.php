
    <?php 
    include_once "header.php"
    ?>
     <?php
        if (!isset($_SESSION["useruid"])) {   //tsekkaa onko käyttäjä kirjautunut sisälle ja jos on ---> avaa lisää linkkejä sivustolle
                    echo" <div class='text-center mt-2 name'>
                     Already have an account?<br>
                     <a href='login.php'>Click here</a><br>
                      to log in
                </div>
                     ";
        }
        
                ?>
    <div class="wrapper"> 
    <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
        </div>
         <div class="mt-4 text-center name">
            <h3>Sign Up</h3>
        </div>
        <form class="p-3 mt-3" action="includes/signup.inc.php" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="fname" placeholder="First Name">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="lname" placeholder="Last Name"><br>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" placeholder="E-mail"><br>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="uid" placeholder="Username"><br>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="password" name="pwd" placeholder="Password"><br>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="password" name="pwdrepeat" placeholder="Confirm Password"><br>
            </div>
            <button class="btn btn-dark mt-3"type="submit" name="submit">Register</button>
            <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo " <div class='text-center mt-4 fs-6'>Täytä kaikki lomakkeen kentät!</div>";

            } 
            else if ($_GET["error"] == "invaliduid") {
                echo "<div class='text-center mt-4 fs-6'>Käyttäjätunnus sisältää kiellettyjä merkkejä!</div>";
            }

             
            else if ($_GET["error"] == "invalidemail") {
                echo "<div class='text-center mt-4 fs-6'>Sähköposti sisältää kiellettyjä merkkejä! / Anna oikea sähköposti!</div>";

            } 
            else if ($_GET["error"] == "invalidpwdmatch") {
                echo "<div class='text-center mt-4 fs-6'>Salasana ja salasanan uudelleen kirjoitus eivät täsmää!</div>";

            } 
            else if ($_GET["error"] == "stmtfailed") {
                echo "<div class='text-center mt-4 fs-6'>Jotain meni pieleen, yritä uudestaan!</div>";
            
            } 
            else if ($_GET["error"] == "usernametaken") {
                echo "<div class='text-center mt-4 fs-6'>Valitsemasi käyttäjätili on jo käytössä!</div>";
                
            } 
            else if ($_GET["error"] == "none") {
                echo "<div class='text-center mt-4 fs-6'>Rekisteröinti onnistunut!</div>";

            }

            }

        ?>
    
    </div>
    </div>
</body>
<?php
include_once "footer.php" 
?>