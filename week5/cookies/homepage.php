<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/6/2017
 * Time: 9:38 PM
 */
$user="abbas";
$pass="mysecret";

if (isset($_COOKIE[["username"]) && isset($_COOKIE["password")) {

    if (($_POST["username"] != $user) || ($_POST["password"] != md5($pass))) {
        header("Location: login.html");
    } else {
        echo "Welcome back ' . $_COOKIE ["username"];
    }

} else {
    header("location: cookies.html");
}