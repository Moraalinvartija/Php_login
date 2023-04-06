<?php

function emptyInputSignup($fname, $lname, $email, $uid, $pwd, $pwdRepeat) {  //functio tarkistaa että kaikki kohdat rekisteröintilomakkeessa on täytetty
    $result;
    if (empty($fname) || empty($lname) || empty($email) || empty($uid) || empty($pwd) || empty($pwdRepeat) ) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($uid) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uid))  {
        $result = true;
    }
     else {
        $result = false;
    }
    return $result;
}

function invaliEmail($email) {    //tarkista annettu sähköposti
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
        $result = true;
    }
     else {
        $result = false;
    }
    return $result;
}

function pwdMatchl($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat)  {
        $result = true;
    }
     else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $uid, $email) {   //tarkistetaan onko käyttäjätunnus käytössä tai sähköposti jo käytössä!
   $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "ss", $uid, $email); //injection esto
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
   } else {
    $result = false;
    return $result;
   }

   mysqli_stmt_close($stmt);
}

function createUser($conn, $fname, $lname, $email, $uid, $pwd) {   //käyttäjä tilin luominen databaseen
    $sql = "INSERT INTO users (usersFname, usersLname, usersEmail, usersUid, usersPwd) VALUES(?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("location: ../signup.php?error=stmtfailed");
     exit();
    }
 

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $uid, $hashedPwd); //injection esto
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
 }

 function emptyInputLogin($username, $pwd) {  //functio tarkistaa että käyttäjätunnus ja salasana kentät eivät ole tyhjiä
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username); //functiossa käy joko käyttäjätunnus tai sähköposti

    if ($uidExists == false ) {
        header("location: ../login.php?error=wronglogin");
        exit();

    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd == false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkPwd == true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();

    }
} 
