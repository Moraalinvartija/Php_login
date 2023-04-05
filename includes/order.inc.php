<?php
if (isset($_POST["submit"])) {
    $user = $_SESSION["useruid"];
    $pitsa = $_POST["pitsa"];
    $size = $_POST["pitsaSize"];
    $extra1 = $_POST["extra1"];
    $extra2 = $_POST["extra2"];
    $extra3 = $_POST["extra3"];
    $info = $_POST["info"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php'; //error handling osio

    createOrder($conn, $user, $pitza, $size, $extra1, $extra2, $extra3, $info);
    header("location: ../profile.php");
    exit();
    

}