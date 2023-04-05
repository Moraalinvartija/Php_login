<?php

//tarkista että käyttäjä tulee sivulle submit napin kautta
if (isset($_POST["submit"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php'; //error handling osio


    if (emptyInputSignup($fname, $lname, $email, $uid, $pwd, $pwdRepeat) !== false) { //tyhjä lomake kenttä
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($uid) !== false) { // käyttäjä id tarkistus
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invaliEmail($email) !== false) { // käyttäjä sähköpostin tarkistus
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatchl($pwd, $pwdRepeat) !== false) { // annetun salasanan ja sen uudelleen kirjoittamisen yhteneväisyys
        header("location: ../signup.php?error=invalidpwdmatch");
        exit();
    }
    if (uidExists($conn, $uid, $email) !== false) { // tarkistus että käyttäjätunnus ei ole jo käytössä
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $fname, $lname, $email, $uid, $pwd); //käyttäjätunnuksen luominen ja käyttäjän rekisteröinti 

} else {
    header("location: ../signup.php");
    exit();
}